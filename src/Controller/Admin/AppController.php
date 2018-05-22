<?php
namespace App\Controller\Admin;

use App\Controller\AppController as BaseController;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use Crud\Controller\ControllerTrait;
use Muffin\Footprint\Auth\FootprintAwareTrait;

/**
 * @property \Crud\Controller\Component\CrudComponent $Crud
 */
class AppController extends BaseController
{
    use ControllerTrait;
    use FootprintAwareTrait;

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

        $this->loadComponent('Crud.Crud', [
            'actions' => [
                'index' => [
                    'className' => 'Crud.Index',
                ],
                'view' => [
                    'className' => 'Crud.View',
                ],
                'add' => [
                    'className' => 'Crud.Add',
                    'view' => 'form',
                    'messages' => [
                        'success' => [
                            'text' => __d('funayaki', 'The {name} has been saved.'),
                        ],
                        'error' => [
                            'text' => __d('funayaki', 'The {name} could not be saved. Please, try again.'),
                        ]
                    ],
                ],
                'edit' => [
                    'className' => 'Crud.Edit',
                    'view' => 'form',
                    'messages' => [
                        'success' => [
                            'text' => __d('funayaki', 'The {name} has been saved.'),
                        ],
                        'error' => [
                            'text' => __d('funayaki', 'The {name} could not be saved. Please, try again.'),
                        ]
                    ],
                ],
                'delete' => [
                    'className' => 'Crud.Delete',
                    'messages' => [
                        'success' => [
                            'text' => __d('funayaki', 'The {name} has been deleted.'),
                        ],
                        'error' => [
                            'text' => __d('funayaki', 'The {name} could not be deleted. Please, try again.'),
                        ]
                    ],
                ],
            ]
        ]);
    }

    /**
     * @throws \Exception
     */
    public function index()
    {
        $this->Crud->execute();
    }

    /**
     * @throws \Exception
     */
    public function view()
    {
        $this->Crud->execute();
    }

    /**
     * @throws \Exception
     */
    public function add()
    {
        $this->Crud->execute();
    }

    /**
     * @throws \Exception
     */
    public function edit()
    {
        $this->Crud->execute();
    }

    /**
     * @throws \Exception
     */
    public function delete()
    {
        $this->Crud->execute();
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
