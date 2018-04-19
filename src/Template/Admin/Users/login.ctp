<?php
/**
 * @var \App\View\AppView $this
 */
?>
<?= $this->Form->create() ?>
<?= $this->Form->control('username', ['label' => false, 'placeholder' => __('Username')]) ?>
<?= $this->Form->control('password', ['label' => false, 'placeholder' => __('Password')]) ?>
<?= $this->Form->button(__('Sign In'), ['class' => 'btn btn-primary btn-block btn-flat']); ?>
<?= $this->Form->end() ?>
<?= $this->Html->link('I forgot my password', ['action' => 'forgot']); ?>
