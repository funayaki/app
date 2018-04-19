<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Form->create(); ?>
<?= $this->Form->control('username', ['label' => false, 'placeholder' => __('Username')]); ?>
<?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-block btn-flat']); ?>
<?= $this->Form->end() ?>
