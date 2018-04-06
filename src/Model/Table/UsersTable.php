<?php
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\Core\Configure;
use Cake\Mailer\MailerAwareTrait;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Utility\Security;
use Cake\Validation\Validator;

/**
 * Users Model
 *
 * @property \App\Model\Table\RolesTable|\Cake\ORM\Association\BelongsTo $Roles
 *
 * @method \App\Model\Entity\User get($primaryKey, $options = [])
 * @method \App\Model\Entity\User newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\User[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\User|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\User patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\User[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\User findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class UsersTable extends Table
{
    use MailerAwareTrait;

    const INACTIVE_STATUS = 0;
    const ACTIVE_STATUS = 1;

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Roles', [
            'foreignKey' => 'role_id',
            'joinType' => 'INNER'
        ]);

        $this->addBehavior('Acl.Acl', ['type' => 'requester']);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('username')
            ->maxLength('username', 60)
            ->requirePresence('username', 'create')
            ->notEmpty('username')
            ->add('username', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('password')
            ->maxLength('password', 100)
            ->requirePresence('password', 'create')
            ->notEmpty('password')
            ->add('password', 'compareWith', ['rule' => ['compareWith', 'verify_password']]);

        $validator
            ->scalar('name')
            ->maxLength('name', 50)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email')
            ->add('email', 'unique', ['rule' => 'validateUnique', 'provider' => 'table']);

        $validator
            ->scalar('token')
            ->maxLength('token', 60)
            ->requirePresence('token', 'create')
            ->notEmpty('token');

        $validator
            ->boolean('active')
            ->requirePresence('active', 'create')
            ->notEmpty('active');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['role_id'], 'Roles'));

        return $rules;
    }

    /**
     * @param Query $query
     * @param array $options
     * @return Query
     */
    public function findAuth(Query $query, array $options)
    {
        $query
            ->select(['id', 'username', 'password'])
            ->find('active');

        return $query;
    }

    /**
     * @param Query $query
     * @param array $options
     * @return Query
     */
    public function findActive(Query $query, array $options)
    {
        $query
            ->where(['Users.active' => self::ACTIVE_STATUS]);

        return $query;
    }

    /**
     * @param Query $query
     * @param array $options
     * @return Query
     */
    public function findAdmin(Query $query, array $options)
    {
        $query
            ->where(['Users.role_id' => RolesTable::ROLE_ADMIN]);

        return $query;
    }

    /**
     * Starts an password reset procedure and sets out an email to the user
     *
     * @param User $user User to run the procedure for
     * @param array $options
     * @return bool Returns true when successful, false if not
     */
    public function resetPassword(User $user, array $options = [])
    {
        // Generate a unique token
        $user->token = $this->generateToken();
        $user = $this->save($user);
        if (!$user) {
            return false;
        }
        // Send out an password reset email
        $email = $this
            ->getMailer('User')
            ->viewVars(compact('options'))
            ->send('resetPassword', [$user]);
        if (!$email) {
            return false;
        }
        return true;
    }

    /**
     * @param null $length
     * @return string
     */
    public function generateToken($length = null)
    {
        if (!$length) {
            $length = Configure::read('Funayaki.tokenLength', 20);
        }
        return bin2hex(Security::randomBytes($length));
    }
}
