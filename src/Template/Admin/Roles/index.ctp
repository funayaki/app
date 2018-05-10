<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role[]|\Cake\Collection\CollectionInterface $roles
 */

$this->extend('Cirici/AdminLTE./Common/index');

$this->assign('subtitle', 'Index');

$this->start('breadcrumb');
$this->Breadcrumbs
    ->add(__('Roles'), ['action' => 'index'])
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
    <th><?= $this->Paginator->sort('title') ?></th>
    <th><?= $this->Paginator->sort('alias') ?></th>
    <th><?= $this->Paginator->sort('created') ?></th>
    <th><?= $this->Paginator->sort('modified') ?></th>
    <th><?= __('Actions') ?></th>
</tr>
</thead>
<?php $this->end(); ?>

<?php $this->start('table-body'); ?>
<tbody>
<?php foreach ($roles as $role): ?>
    <tr>
        <td><?= $this->Number->format($role->id) ?></td>
        <td><?= h($role->title) ?></td>
        <td><?= h($role->alias) ?></td>
        <td><?= h($role->created) ?></td>
        <td><?= h($role->modified) ?></td>
        <td class="actions" style="white-space:nowrap">
            <?= $this->Html->link(__('View'), ['action' => 'view', $role->id], ['class' => 'btn btn-default btn-xs']) ?>
            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $role->id], ['class' => 'btn btn-default btn-xs']) ?>
            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $role->id], ['confirm' => __('Are you sure you want to delete # {0}?', $role->id), 'class' => 'btn btn-danger btn-xs']) ?>
        </td>
    </tr>
<?php endforeach; ?>
</tbody>
<?php $this->end(); ?>
