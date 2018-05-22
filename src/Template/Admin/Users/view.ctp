<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

$this->extend('Cirici/AdminLTE./Common/view');

$this->assign('subtitle', __('View'));

$this->start('breadcrumb');
$this->Breadcrumbs
    ->add(__('Users'), ['action' => 'index'])
    ->add(__('View'), null, ['class' => 'active']);

echo $this->Breadcrumbs->render();
$this->end();
?>

<?php $this->start('box-body'); ?>
<table class="table table-hover">
    <tbody>
    <tr>
        <th><?= __('Username') ?></th>
        <td><?= h($user->username) ?></td>
    </tr>
    <tr>
        <th><?= __('Name') ?></th>
        <td><?= h($user->name) ?></td>
    </tr>
    <tr>
        <th><?= __('Email') ?></th>
        <td><?= h($user->email) ?></td>
    </tr>
    <tr>
        <th><?= __('Token') ?></th>
        <td><?= h($user->token) ?></td>
    </tr>
    <tr>
        <th><?= __('Role') ?></th>
        <td><?= $user->has('role') ? $this->Html->link($user->role->title, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
    </tr>
    <tr>
        <th><?= __('Id') ?></th>
        <td><?= $this->Number->format($user->id) ?></td>
    </tr>
    <tr>
        <th><?= __('Created') ?></th>
        <td><?= h($user->created) ?></td>
    </tr>
    <tr>
        <th><?= __('Modified') ?></th>
        <td><?= h($user->modified) ?></td>
    </tr>
    <tr>
        <th><?= __('Active') ?></th>
        <td><?= $user->active ? __('Yes') : __('No'); ?></td>
    </tr>
    </tbody>
</table>
<?php $this->end(); ?>