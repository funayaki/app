<?php
namespace App\Test\TestCase\Controller\Admin;

use App\Controller\Admin\DashboardsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\Admin\DashboardsController Test Case
 */
class DashboardsControllerTest extends IntegrationTestCase
{

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

        $this->get('/admin');
        $this->assertResponseOk();

        $this->get('/admin/dashboards');
        $this->assertResponseOk();
    }
}

