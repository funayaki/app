<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Flash->render() ?>
<?= $this->Form->create(); ?>
<?= $this->Form->control('username', ['label' => false, 'placeholder' => __('Username')]); ?>
<div class="row">
    <div class="col-xs-6">
    </div>
    <div class="col-xs-6">
        <?= $this->Form->button(__('Reset Password'), ['class' => 'btn btn-primary btn-block btn-flat']); ?>
    </div>
    <!-- /.col -->
</div>
<?= $this->Form->end() ?>
