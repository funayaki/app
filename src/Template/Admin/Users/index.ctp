<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */

$this->extend('Cirici/AdminLTE./Common/index');

$this->assign('subtitle', 'Index');

$this->start('breadcrumb');
$this->Breadcrumbs
    ->add(__('Users'), ['action' => 'index'])
    ->add('Index', null, ['class' => 'active']);

echo $this->Breadcrumbs->render();
$this->end();

$this->start('page-numbers');
echo $this->Paginator->numbers();
$this->end();
?>

<?php $this->start('table-header'); ?>
<thead>
<tr>
    <th><?= $this->Paginator->sort('id') ?></th>
    <th><?= $this->Paginator->sort('username') ?></th>
    <th><?= $this->Paginator->sort('name') ?></th>
    <th><?= $this->Paginator->sort('email') ?></th>
    <th><?= $this->Paginator->sort('role_id') ?></th>
    <th><?= $this->Paginator->sort('active') ?></th>
    <th><?= $this->Paginator->sort('created') ?></th>
    <th><?= $this->Paginator->sort('modified') ?></th>
    <th><?= __('Actions') ?></th>
</tr>
</thead>
<?php $this->end(); ?>

<?php $this->start('table-body'); ?>
<tbody>
<?php foreach ($users as $user): ?>
    <tr>
        <td><?= $this->Number->format($user->id) ?></td>
        <td><?= h($user->username) ?></td>
        <td><?= h($user->name) ?></td>
        <td><?= h($user->email) ?></td>
        <td><?= $user->has('role') ? $this->Html->link($user->role->title, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
        <td><?= $user->active ? $this->Html->tag('span', '', ['class' => 'glyphicon glyphicon-ok']) : '' ?></td>
        <td><?= h($user->created) ?></td>
        <td><?= h($user->modified) ?></td>
        <td class="actions" style="white-space:nowrap">
            <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class' => 'btn btn-default btn-xs']) ?>
            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class' => 'btn btn-default btn-xs']) ?>
            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'btn btn-danger btn-xs']) ?>
        </td>
    </tr>
<?php endforeach; ?>
</tbody>
<?php $this->end(); ?>
