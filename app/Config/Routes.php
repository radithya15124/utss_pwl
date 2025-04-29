<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'AuthController::login'); // Route default ke halaman login
$routes->post('/auth/login', 'AuthController::attemptLogin');
$routes->get('/auth/logout', 'AuthController::logout');

// Dashboard berdasarkan role
$routes->group('', ['filter' => 'auth'], function ($routes) {
    $routes->get('/admin', 'DashboardController::admin', ['filter' => 'admin']);
    $routes->get('/user', 'DashboardController::user', ['filter' => 'user']);
});
