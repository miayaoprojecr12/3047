<!-- File: templates/Products/edit.php -->
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>

<div class="products form content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Edit Product') ?></legend>
        <?php
        echo $this->Form->control('id', ['type' => 'hidden']);
        echo $this->Form->control('name');
        echo $this->Form->control('price');
        // Add other form controls for your product properties here
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
