<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// $routes->get('/', 'Home::index');
// Auth routes
$routes->get('/', 'AuthController::index');
$routes->post('/login', 'AuthController::login');
$routes->get('/logout', 'AuthController::logout');
$routes->get('/forgot-password', 'AuthController::forgotPassword');
$routes->post('/send-reset-link', 'AuthController::sendResetLink');
$routes->get('/reset-password/(:any)', 'AuthController::showResetForm/$1');
$routes->post('/reset-password', 'AuthController::resetPassword');
// Dashboard route
$routes->get('/dashboard', 'Home::index');
// New route for sr_players
$routes->get('/sr_player', 'SRplayers::index');

// New route for sr_official
$routes->get('/sr_official', 'SROfficial::index');

// Routes for listing players and officials
$routes->get('/players', 'PlayersController::index');
$routes->get('/players/(:num)', 'PlayersController::view/$1');



// Routes for listing officials
$routes->get('/official', 'OfficialController::index');