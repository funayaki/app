<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

use Cake\Utility\Inflector;

$action = Inflector::camelize($this->request->getParam('action'));

$this->extend('Cirici/AdminLTE./Common/form');

$this->assign('subtitle', $action);

$this->start('breadcrumb');
$this->Breadcrumbs
    ->add(__('Users'), ['action' => 'index'])
    ->add($action, null, ['class' => 'active']);

echo $this->Breadcrumbs->render();
$this->end();

$this->assign('form-start', $this->Form->create($user, ['novalidate' => true]));

$this->start('form-content');
echo $this->Form->control('username');
echo $this->Form->control('name');
echo $this->Form->control('password', ['type' => 'password']);
echo $this->Form->control('verify_password', ['type' => 'password']);
echo $this->Form->control('email');
echo $this->Form->control('token');
echo $this->Form->control('role_id', ['options' => $roles]);
echo $this->Form->control('active');
$this->end();

$this->start('form-button');
echo $this->Form->button(__('Submit'));
$this->end();

$this->assign('form-end', $this->Form->end());
