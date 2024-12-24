<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Login\LoginController;
use App\Controllers\Dashboard\DashboardController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [LoginController::class, 'index']);
$routes->get('dashboard', [DashboardController::class, 'index']);
$routes->post('login/process', [LoginController::class, 'processLogin']);
$routes->get('logout', [LoginController::class, 'logout']);
