<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="users form large-12 medium-12 columns content">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username') ?></legend>
        <?= $this->Form->control('username') ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')); ?>
    <?= $this->Form->end() ?>
</div>
