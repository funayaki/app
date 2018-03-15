<?php
namespace App\Test\TestCase\Controller\Admin;

use App\Controller\Admin\RolesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\Admin\RolesController Test Case
 */
class RolesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.roles',
        'app.users'
    ];

    public function setUp()
    {
        parent::setUp();

        $this->enableRetainFlashMessages();
        $this->enableCsrfToken();
        $this->enableSecurityToken();
    }

    public function setUpAuth()
    {
        $this->session(['Auth.User.id' => 1]);
    }

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->setUpAuth();

        $this->get('/admin/roles');
        $this->assertResponseOk();
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->setUpAuth();

        $this->get('/admin/roles/view/1');
        $this->assertResponseOk();
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->setUpAuth();

        $data = [
            'title' => 'Lorem ipsum dolor sit amet',
            'alias' => 'Lorem ipsum dolor sit amet',
        ];

        $this->post('/admin/roles/add', $data);
        $this->assertResponseSuccess();
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->setUpAuth();

        $data = [
            'title' => 'Lorem ipsum dolor sit amet',
            'alias' => 'Lorem ipsum dolor sit amet',
        ];

        $this->post('/admin/roles/edit/1', $data);
        $this->assertResponseSuccess();
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->setUpAuth();

        $this->delete('/admin/roles/delete/1');
        $this->assertResponseSuccess();
    }
}
