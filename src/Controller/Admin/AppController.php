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

        $this->loadComponent('Gourmet/KnpMenu.Menu');
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
