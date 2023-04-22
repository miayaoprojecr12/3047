<?php $this->assign('title', 'Login'); ?>
<?= $this->Form->create() ?>
<fieldset>
    <legend><?= __('Login') ?></legend>
    <?= $this->Form->control('email') ?>
    <?= $this->Form->control('password') ?>
</fieldset>
<?= $this->Form->button(__('Login')) ?>
<?= $this->Form->end() ?>
