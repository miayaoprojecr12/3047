<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enquiry $enquiry
 */
?>
<div class="row">
    <div class="column-responsive">
        <div class="enquiries form content">
            <?= $this->Form->create($enquiry) ?>
            <fieldset>
                <legend><?= __('Send new enquiry') ?></legend>
                <?php
                echo $this->Form->control('full_name', ['label' => 'Your full name']);
                echo $this->Form->control('email', ['label' => 'Your email address']);
                echo $this->Form->control('body', ['label' => 'Any enquiries', 'rows' => 15]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Send enquiry')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
