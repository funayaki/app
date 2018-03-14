<?php
namespace App\Test\TestCase\Controller\Admin;

use App\Controller\Admin\UsersController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\Admin\UsersController Test Case
 */
class UsersControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.users',
        'app.roles'
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex()
    {
        $this->session(['Auth.User.id' => 1]);

        $this->get('/admin/users');
        $this->assertResponseOk();
    }

    /**
     * Test view method
     *
     * @return void
     */
    public function testView()
    {
        $this->session(['Auth.User.id' => 1]);

        $this->get('/admin/users/view/1');
        $this->assertResponseOk();
    }

    /**
     * Test add method
     *
     * @return void
     */
    public function testAdd()
    {
        $this->session(['Auth.User.id' => 1]);

        $data = [
            'username' => 'Lorem ipsum dolor sit amet',
            'password' => 'Lorem ipsum dolor sit amet',
            'name' => 'Lorem ipsum dolor sit amet',
            'email' => 'Lorem ipsum dolor sit amet',
            'token' => 'Lorem ipsum dolor sit amet',
            'role_id' => 1,
            'active' => 1,
        ];

        $this->post('/admin/users/add', $data);
        $this->assertResponseSuccess();
    }

    /**
     * Test edit method
     *
     * @return void
     */
    public function testEdit()
    {
        $this->session(['Auth.User.id' => 1]);

        $data = [
            'username' => 'Lorem ipsum dolor sit amet',
            'password' => 'Lorem ipsum dolor sit amet',
            'name' => 'Lorem ipsum dolor sit amet',
            'email' => 'Lorem ipsum dolor sit amet',
            'token' => 'Lorem ipsum dolor sit amet',
            'role_id' => 1,
            'active' => 1,
        ];

        $this->post('/admin/users/edit/1', $data);
        $this->assertResponseSuccess();
    }

    /**
     * Test delete method
     *
     * @return void
     */
    public function testDelete()
    {
        $this->session(['Auth.User.id' => 1]);

        $this->delete('/admin/users/delete/1');
        $this->assertResponseSuccess();
    }

    /**
     * Test login method
     *
     * @return void
     */
    public function testLogin()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test login with invalid password method
     *
     * @return void
     */
    public function testLoginWithInvalidPassword()
    {
        $this->enableRetainFlashMessages();

        $data = [
            'username' => 'admin',
            'password' => 'invalid',
        ];

        $this->post('/admin/users/login', $data);
        $this->assertSession('Username or password is incorrect', 'Flash.flash.0.message');
    }

    /**
     * Test logout method
     *
     * @return void
     */
    public function testLogout()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test forgot method
     *
     * @return void
     */
    public function testForgot()
    {
        $data = [
            'username' => 'admin',
        ];

        $this->post('/admin/users/forgot', $data);
        $this->assertSession('An email has been sent with instructions for resetting your password.', 'Flash.flash.0.message');
        $this->assertRedirect(['controller' => 'Users', 'action' => 'login']);
    }

    /**
     * Test forgot with anon method
     *
     * @return void
     */
    public function testForgotWithAnon()
    {
        $this->enableRetainFlashMessages();

        $data = [
            'username' => 'anon',
        ];

        $this->post('/admin/users/forgot', $data);
        $this->assertSession('Invalid username', 'Flash.flash.0.message');
    }

    /**
     * Test reset method
     *
     * @return void
     */
    public function testReset()
    {
        $username = 'admin';
        $token = 'apple';

        $data = [
            'password' => 'new_password',
            'verify_password' => 'new_password',
        ];

        $this->put(sprintf('/admin/users/reset/%s/%s', $username, $token), $data);
        $this->assertSession('Your password has been reset successfully.', 'Flash.flash.0.message');
        $this->assertRedirect(['controller' => 'Users', 'action' => 'login']);
    }

    /**
     * Test reset with mismatch password method
     *
     * @return void
     */
    public function testResetWithMismatchPassword()
    {
        $this->enableRetainFlashMessages();

        $username = 'admin';
        $token = 'apple';

        $data = [
            'password' => 'new_password',
            'verify_password' => 'mismatch_password',
        ];

        $this->put(sprintf('/admin/users/reset/%s/%s', $username, $token), $data);
        $this->assertSession('Your password could not be saved. Please, try again.', 'Flash.flash.0.message');
    }

    /**
     * Test reset with invalid token method
     *
     * @return void
     */
    public function testResetWithInvalidToken()
    {
        $this->enableRetainFlashMessages();

        $username = 'admin';
        $token = 'invalid_token';

        $this->put(sprintf('/admin/users/reset/%s/%s', $username, $token));
        $this->assertSession('An error occurred.', 'Flash.flash.0.message');
        $this->assertRedirect(['controller' => 'Users', 'action' => 'login']);
    }
}
