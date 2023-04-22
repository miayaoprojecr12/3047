<?php $this->assign('title', 'Cart'); ?>

<h1>Cart</h1>
<?php if (!empty($cart)): ?>
    <table class="table">
        <thead>
        <tr>
            <th>Product</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
        </thead>
        <tbody>
        <?php $totalPrice = 0; ?>
        <?php foreach ($cart as $item): ?>
            <tr>
                <td><?= h($item['name']) ?></td>
                <td><?= h($item['quantity']) ?></td>
                <td><?= h($item['price'] * $item['quantity']) ?></td>
            </tr>
            <?php $totalPrice += $item['price'] * $item['quantity']; ?>
        <?php endforeach; ?>
        </tbody>
    </table>
    <h3>Total Price: <?= $totalPrice ?></h3>
<?php else: ?>
    <p>Your cart is empty.</p>
<?php endif; ?>
