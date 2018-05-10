<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */

use Cake\Utility\Inflector;

$action = Inflector::camelize($this->request->getParam('action'));

$this->extend('Cirici/AdminLTE./Common/form');

$this->assign('subtitle', $action);

$this->start('breadcrumb');
$this->Breadcrumbs
    ->add(__('Roles'), ['action' => 'index'])
    ->add($action, null, ['class' => 'active']);

echo $this->Breadcrumbs->render();
$this->end();

$this->assign('form-start', $this->Form->create($role, ['novalidate' => true]));

$this->start('form-content');
echo $this->Form->control('title');
echo $this->Form->control('alias');
$this->end();

$this->start('form-button');
echo $this->Form->button(__('Submit'));
$this->end();

$this->assign('form-end', $this->Form->end());
