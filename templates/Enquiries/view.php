<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enquiry $enquiry
 */
?>
<div class="row">
    <div class="column-responsive">
        <div class="enquiries view content">
            <h3>Enquiry from <b><?= h($enquiry->full_name) ?></b></h3>
            <table>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= $this->Html->link(h($enquiry->email), 'mailto:' . $enquiry->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($enquiry->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email Sent') ?></th>
                    <td><?= $enquiry->email_sent ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Body') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($enquiry->body)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
