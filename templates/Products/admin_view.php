<?php $this->assign('title', 'Admin - View Product'); ?>

<h1><?= h($product->name) ?></h1>
<p><?= h($product->description) ?></p>
<p><?= h($product->price) ?></p>
