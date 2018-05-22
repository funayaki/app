<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?= $this->Form->create($user) ?>
<?= $this->Form->control('password', ['label' => false, 'value' => '', 'placeholder' => __('Password')]) ?>
<?= $this->Form->control('verify_password', ['label' => false, 'type' => 'password', 'value' => '', 'placeholder' => __('Verify Password')]); ?>
<?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary btn-block btn-flat']); ?>
<?= $this->Form->end() ?>
