<?php $this->assign('title', 'Admin Products'); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Product demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

<h1>Admin Products</h1>

<table>
    <thead>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Actions</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $this->Html->link($product->name, ['action' => 'view', $product->id]) ?></td>
            <td><?= h($product->price) ?></td>
            <td><?= h($product->description) ?></td>
            <td>
                <?= $this->Html->link('View', ['action' => 'view', $product->id]) ?>
                <?= $this->Html->link('Edit', ['action' => 'edit', $product->id]) ?>
                <?= $this->Form->postLink('Delete', ['action' => 'delete', $product->id], ['confirm' => 'Are you sure?']) ?>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>
