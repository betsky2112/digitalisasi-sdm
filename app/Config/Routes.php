<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Login\LoginController;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', [LoginController::class, 'index']);
