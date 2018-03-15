<?php
namespace App\Test\TestCase\Controller\Admin;

use App\Controller\Admin\DashboardsController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\Admin\DashboardsController Test Case
 */
class DashboardsControllerTest extends IntegrationTestCase
{

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->session(['Auth.User.id' => 1]);

        $this->get('/admin');
        $this->assertResponseOk();

        $this->get('/admin/dashboards');
        $this->assertResponseOk();
    }
}

