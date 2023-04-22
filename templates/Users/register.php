<?php $this->assign('title', 'Register'); ?>
<?= $this->Form->create() ?>
<fieldset>
    <legend><?= __('Register') ?></legend>
    <?= $this->Form->control('name') ?>
    <?= $this->Form->control('email') ?>
    <?= $this->Form->control('password') ?>
</fieldset>
<?= $this->Form->button(__('Register')) ?>
<?= $this->Form->end() ?>

