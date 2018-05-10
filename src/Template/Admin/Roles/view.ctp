<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Role $role
 */

$this->extend('Cirici/AdminLTE./Common/view');

$this->assign('subtitle', __('View'));

$this->start('breadcrumb');
$this->Breadcrumbs
    ->add(__('Roles'), ['action' => 'index'])
    ->add(__('View'), null, ['class' => 'active']);

echo $this->Breadcrumbs->render();
$this->end();
?>

<?php $this->start('box-body'); ?>
<table class="table table-hover">
    <tbody>
    <tr>
        <th><?= __('Title') ?></th>
        <td><?= h($role->title) ?></td>
    </tr>
    <tr>
        <th><?= __('Alias') ?></th>
        <td><?= h($role->alias) ?></td>
    </tr>
    <tr>
        <th><?= __('Id') ?></th>
        <td><?= $this->Number->format($role->id) ?></td>
    </tr>
    <tr>
        <th><?= __('Created') ?></th>
        <td><?= h($role->created) ?></td>
    </tr>
    <tr>
        <th><?= __('Modified') ?></th>
        <td><?= h($role->modified) ?></td>
    </tr>
    </tbody>
</table>
<?php $this->end(); ?>
