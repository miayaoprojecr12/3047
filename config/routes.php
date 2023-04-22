<?php

use Cake\Routing\Route\DashedRoute;
use Cake\Routing\RouteBuilder;

return static function (RouteBuilder $routes) {
    $routes->setRouteClass(DashedRoute::class);

    $routes->scope('/', function (RouteBuilder $builder) {
        $builder->connect('/', ['controller' => 'Home', 'action' => 'index']);

        // Routes for customer side
        $builder->connect('/products', ['controller' => 'Products', 'action' => 'index']);
        $builder->connect('/services', ['controller' => 'Services', 'action' => 'index']);
        $builder->connect('/cart', ['controller' => 'ShoppingCart', 'action' => 'index']); // Updated controller name
        $builder->connect('/enquiries', ['controller' => 'Enquiries', 'action' => 'add']); // Updated controller name
        $builder->connect('/login', ['controller' => 'Users', 'action' => 'login']);
        $builder->connect('/register', ['controller' => 'Users', 'action' => 'register']);

        // Routes for admin side
        $builder->connect('/admin', ['controller' => 'Dashboard', 'action' => 'index']);
        $builder->connect('/admin/dashboard', ['controller' => 'Dashboard', 'action' => 'dashboard']);
        $builder->connect('/admin/orders', ['controller' => 'Orders', 'action' => 'index']);
        $builder->connect('/admin/products', ['controller' => 'Products', 'action' => 'adminIndex']); // Updated
        $builder->connect('/admin/products/view/:id', ['controller' => 'Products', 'action' => 'adminView'], ['pass' => ['id']]); // Added
        $builder->connect('/admin/products/edit/:id', ['controller' => 'Products', 'action' => 'adminEdit'], ['pass' => ['id']]); // Added

        $builder->connect('/admin/enquiries', ['controller' => 'Enquiries', 'action' => 'adminIndex']);
        $builder->connect('/orders', ['controller' => 'Orders', 'action' => 'index']);
        $builder->connect('/products', ['controller' => 'Products', 'action' => 'index']);
        $builder->connect('/users', ['controller' => 'Users', 'action' => 'index']);


        $builder->fallbacks();

        $builder->connect('/pages/*', 'Pages::display');

        // Fallback routes
        $builder->fallbacks();
    });
};
