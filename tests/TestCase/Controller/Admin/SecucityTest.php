<?php
namespace App\Test\TestCase\Controller\Admin;

use Cake\TestSuite\IntegrationTestCase;

class SecurityTest extends IntegrationTestCase
{

    /**
     * Test Csrf protection method
     *
     * @return void
     */
    public function testCsrfProtection()
    {
        $data = [
            'username' => 'admin',
            'password' => 'secret',
        ];

        $this->post('/admin/users/login', $data);
        $this->assertResponseError();
    }
}

