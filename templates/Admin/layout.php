<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->fetch('title') ?></title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('default') ?>
    <?= $this->Html->script('default') ?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

<nav>
    <ul>
        <li><?= $this->Html->link('Orders', ['prefix' => 'admin', 'controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link('Products', ['prefix' => 'admin', 'controller' => 'Products', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link('Users', ['prefix' => 'admin', 'controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link('Enquiries', ['prefix' => 'admin', 'controller' => 'Enquiries', 'action' => 'adminIndex']) ?></li>
    </ul>
</nav>
<main>
    <?= $this->Flash->render() ?>
    <?= $this->fetch('content') ?>
</main>
<footer>
</footer>
</body>
</html>
