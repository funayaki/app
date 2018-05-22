<?php
/**
 * @var \App\View\AppView $this
 */
?>
<p class="login-box-msg">Sign in to start your session</p>
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
<?= $this->Form->control('username', ['label' => false, 'placeholder' => __('Username')]) ?>
<?= $this->Form->control('password', ['label' => false, 'placeholder' => __('Password')]) ?>
<div class="row">
    <div class="col-xs-8">
    </div>
    <div class="col-xs-4">
        <?= $this->Form->button(__('Sign In'), ['class' => 'btn btn-primary btn-block btn-flat']); ?>
    </div>
    <!-- /.col -->
    <?= $this->Form->end() ?>
</div>
<?= $this->Html->link('I forgot my password', ['action' => 'forgot']); ?>
