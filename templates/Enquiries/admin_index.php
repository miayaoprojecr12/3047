<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Enquiry[] $enquiries
 */
?>

<h1><?= __('Enquiries') ?></h1>
<table>
    <thead>
    <tr>
        <th><?= $this->Paginator->sort('id') ?></th>
        <th><?= $this->Paginator->sort('name') ?></th>
        <th><?= $this->Paginator->sort('email') ?></th>
        <th><?= $this->Paginator->sort('subject') ?></th>
        <th><?= $this->Paginator->sort('message') ?></th>
        <th><?= $this->Paginator->sort('created') ?></th>
        <th><?= $this->Paginator->sort('modified') ?></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($enquiries as $enquiry): ?>
        <tr>
            <td><?= $this->Number->format($enquiry->id) ?></td>
            <td><?= h($enquiry->name) ?></td>
            <td><?= h($enquiry->email) ?></td>
            <td><?= h($enquiry->subject) ?></td>
            <td><?= h($enquiry->message) ?></td>
            <td><?= h($enquiry->created) ?></td>
            <td><?= h($enquiry->modified) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>


