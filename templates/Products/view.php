<?php $this->assign('title', $product->name); ?>
<h1><?= h($product->name) ?></h1>
<p>Price: <?= h($product->price) ?></p>
<p>Description: <?= h($product->description) ?></p>
