<?php
use Migrations\AbstractMigration;

class Initial extends AbstractMigration
{
    public function up()
    {

        $this->table('acos')
            ->addColumn('parent_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('model', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('foreign_key', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('alias', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('lft', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('rght', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'lft',
                    'rght',
                ]
            )
            ->addIndex(
                [
                    'alias',
                ]
            )
            ->create();

        $this->table('aros')
            ->addColumn('parent_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('model', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('foreign_key', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('alias', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => true,
            ])
            ->addColumn('lft', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addColumn('rght', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => true,
            ])
            ->addIndex(
                [
                    'lft',
                    'rght',
                ]
            )
            ->addIndex(
                [
                    'alias',
                ]
            )
            ->create();

        $this->table('aros_acos')
            ->addColumn('aro_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('aco_id', 'integer', [
                'default' => null,
                'limit' => 11,
                'null' => false,
            ])
            ->addColumn('_create', 'string', [
                'default' => '0',
                'limit' => 2,
                'null' => false,
            ])
            ->addColumn('_read', 'string', [
                'default' => '0',
                'limit' => 2,
                'null' => false,
            ])
            ->addColumn('_update', 'string', [
                'default' => '0',
                'limit' => 2,
                'null' => false,
            ])
            ->addColumn('_delete', 'string', [
                'default' => '0',
                'limit' => 2,
                'null' => false,
            ])
            ->addIndex(
                [
                    'aro_id',
                    'aco_id',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'aco_id',
                ]
            )
            ->create();

        $this->table('i18n')
            ->addColumn('locale', 'string', [
                'default' => null,
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('model', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('foreign_key', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('field', 'string', [
                'default' => null,
                'limit' => 255,
                'null' => false,
            ])
            ->addColumn('content', 'text', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addIndex(
                [
                    'locale',
                    'model',
                    'foreign_key',
                    'field',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'model',
                    'foreign_key',
                    'field',
                ]
            )
            ->create();

        $this->table('roles')
            ->addColumn('title', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('alias', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->create();

        $this->table('sessions', ['id' => false, 'primary_key' => ['id']])
            ->addColumn('id', 'string', [
                'default' => null,
                'limit' => 40,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => 'CURRENT_TIMESTAMP',
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('data', 'binary', [
                'default' => null,
                'limit' => null,
                'null' => true,
            ])
            ->addColumn('expires', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => true,
                'signed' => false,
            ])
            ->create();

        $this->table('users')
            ->addColumn('username', 'string', [
                'default' => null,
                'limit' => 60,
                'null' => false,
            ])
            ->addColumn('password', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('name', 'string', [
                'default' => null,
                'limit' => 50,
                'null' => false,
            ])
            ->addColumn('email', 'string', [
                'default' => null,
                'limit' => 100,
                'null' => false,
            ])
            ->addColumn('token', 'string', [
                'default' => null,
                'limit' => 60,
                'null' => false,
            ])
            ->addColumn('role_id', 'integer', [
                'default' => null,
                'limit' => 10,
                'null' => false,
            ])
            ->addColumn('active', 'boolean', [
                'default' => false,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addColumn('modified', 'datetime', [
                'default' => null,
                'limit' => null,
                'null' => false,
            ])
            ->addIndex(
                [
                    'email',
                ],
                ['unique' => true]
            )
            ->addIndex(
                [
                    'username',
                ],
                ['unique' => true]
            )
            ->create();
    }

    public function down()
    {
        $this->dropTable('acos');
        $this->dropTable('aros');
        $this->dropTable('aros_acos');
        $this->dropTable('i18n');
        $this->dropTable('roles');
        $this->dropTable('sessions');
        $this->dropTable('users');
    }
}
