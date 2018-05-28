<?php
namespace App\Controller\Admin;

use Cake\Controller\Component\AuthComponent;
use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Muffin\Footprint\Auth\FootprintAwareTrait;

/**
 * @property \Crud\Controller\Component\CrudComponent $Crud
 */
class AppController extends Controller
{
    use FootprintAwareTrait;

    /**
     * Components
     *
     * @var array
     */
    public $components = [
        'Acl' => [
            'className' => 'Acl.Acl'
        ]
    ];

    /**
     * @var array
     */
    public $helpers = [
        'Gourmet/KnpMenu.Menu',
        'Breadcrumbs'
    ];

    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        $this->loadComponent('Gourmet/KnpMenu.Menu');

        $this->loadComponent('Auth', [
            'loginAction' => [
                'controller' => 'Users',
                'action' => 'login',
                'plugin' => 'Users'
            ],
            'loginRedirect' => [
                'controller' => 'Dashboards',
                'action' => 'index',
                'plugin' => null
            ],
            'authError' => 'You are not authorized to access that location.',
            'authenticate' => [
                AuthComponent::ALL => [
                    'userModel' => 'Users.Users',
                    'finder' => 'auth'
                ],
                'Form',
            ],
            'authorize' => [
                AuthComponent::ALL => [
                    'actionPath' => 'controllers/'
                ],
                'Acl.Actions',
            ],
        ]);

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        $this->loadComponent('Security');
        $this->loadComponent('Csrf');
    }

    /**
     * @param Event $event
     * @return void
     */
    public function beforeRender(Event $event)
    {
        $this->viewBuilder()->setTheme('Cirici/AdminLTE');

        // Set logged in user info to viewVars
        $currentUser = $this->_getCurrentUser();
        if ($currentUser) {
            $this->set('currentUser', TableRegistry::get('Users')->get($currentUser->id));
        }
    }
}
