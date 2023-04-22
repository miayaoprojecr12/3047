<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enquiry[]|\Cake\Datasource\ResultSetInterface $enquiries
 */
?>

<h1>Enquiries</h1>

<table>
    <thead>
    <tr>
        <th><?= $this->Paginator->sort('id') ?></th>
        <th><?= $this->Paginator->sort('name') ?></th>
        <th><?= $this->Paginator->sort('email') ?></th>
        <th><?= $this->Paginator->sort('phone') ?></th>
        <th><?= $this->Paginator->sort('message') ?></th>
        <th><?= $this->Paginator->sort('created') ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($enquiries as $enquiry): ?>
        <tr>
            <td><?= h($enquiry->id) ?></td>
            <td><?= h($enquiry->name) ?></td>
            <td><?= h($enquiry->email) ?></td>
            <td><?= h($enquiry->phone) ?></td>
            <td><?= h($enquiry->message) ?></td>
            <td><?= h($enquiry->created) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<?= $this->Paginator->prev('<< ' . __('previous')) ?>
<?= $this->Paginator->numbers() ?>
<?= $this->Paginator->next(__('next') . ' >>') ?>
