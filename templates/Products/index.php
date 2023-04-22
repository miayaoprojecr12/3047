<?php $this->assign('title', 'Products'); ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product  demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>

<h1>Products</h1>

<table class="table"> <!-- Added 'class="table"' for Bootstrap styling -->

    <thead>
    <tr>
        <th>Name</th>
        <th>Price</th>
        <th>Description</th>
        <th>Action</th> <!-- Added this table header for the Buy button -->
    </tr>
    </thead>
    <tbody>
    <?php foreach ($products as $product): ?>
        <tr>
            <td><?= $this->Html->link($product->name, ['action' => 'view', $product->id]) ?></td>
            <td><?= h($product->price) ?></td>
            <td><?= h($product->description) ?></td>
            <!-- Moved the Buy button inside a table cell -->
            <td><?= $this->Html->link(__('Buy'), ['controller' => 'Products', 'action' => 'addToCart', $product->id], ['class' => 'btn btn-primary']) ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>
