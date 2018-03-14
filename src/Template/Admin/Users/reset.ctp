<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="users form large-12 medium-12 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Please enter your new password') ?></legend>
        <?= $this->Form->control('password', ['value' => '']) ?>
        <?= $this->Form->input('verify_password', ['type' => 'password', 'value' => '']); ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')); ?>
    <?= $this->Form->end() ?>
</div>
