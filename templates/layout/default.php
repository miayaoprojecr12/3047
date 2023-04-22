<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'Tailor Made';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
<nav class="top-nav">
    <div class="top-nav-title">
        <a href="<?= $this->Url->build('/') ?>"><span>Tailor</span>Made</a>
    </div>
    <nav>
    </nav>
    <div class="top-nav-links">
        <ul>
            <?php if (strpos($this->getRequest()->getRequestTarget(), '/admin/') !== false): ?>
                <?= $this->Html->link('Dashboard', ['controller' => 'Dashboard', 'action' => 'dashboard']) ?>
                <?= $this->Html->link('Orders', ['controller' => 'Orders', 'action' => 'index']) ?>
                <?= $this->Html->link('Products', ['controller' => 'Products', 'action' => 'adminIndex']) ?>
                <?= $this->Html->link('Enquiries', ['controller' => 'Enquiries', 'action' => 'index']) ?>
                <?= $this->Html->link('Users', ['controller' => 'Users', 'action' => 'index']) ?>
            <?php else: ?>
                <?= $this->Html->link('Home', '/') ?>
                <?= $this->Html->link('Products', ['controller' => 'Products', 'action' => 'index']) ?>
                <?= $this->Html->link('Services', ['controller' => 'Services', 'action' => 'index']) ?>
                <?= $this->Html->link('Cart', ['controller' => 'ShoppingCart', 'action' => 'cart']) ?>
                <?= $this->Html->link('Enquiries', ['controller' => 'Enquiries', 'action' => 'index']) ?>
                <?= $this->Html->link('Login', ['controller' => 'Users', 'action' => 'login']) ?>
                <?= $this->Html->link('Register', ['controller' => 'Users', 'action' => 'register']) ?>
            <?php endif; ?>
        </ul>
    </div>
</nav>
<main class="main">
    <div class="container">
        <?= $this->Flash->render() ?>
        <?= $this->fetch('content') ?>
    </div>
</main>

<footer>
</footer>
</body>
</html>
