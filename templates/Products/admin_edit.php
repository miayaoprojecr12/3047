<?php $this->assign('title', 'Admin - Edit Product'); ?>

<h1>Edit Product</h1>

<?= $this->Form->create($product) ?>
<fieldset>
    <legend><?= __('Edit Product') ?></legend>
    <?= $this->Form->control('name') ?>
    <?= $this->Form->control('description') ?>
    <?= $this->Form->control('price') ?>
</fieldset>
<?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
