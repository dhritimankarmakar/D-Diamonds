<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/contact', 'Home::contact');
$routes->get('/blog', 'Home::blog');
$routes->get('/faq', 'Home::faq');
$routes->get('/customer-service', 'Home::customer_service');



// $routes->get('/login', 'Home::login');




// $routes->get('/signup', 'Home::signup');




$routes->get('/checkout', 'Home::checkout');
$routes->get('/cart', 'Home::cart');
$routes->get('/shop', 'Home::shop');
$routes->get('/track-order', 'Home::track');


$routes->match(['GET','POST'],'/signup','Home::signup');



$routes->match(['GET', 'POST'], '/login', 'AdminController\LoginController::index');







$routes->group('admin', function ($routes) {

    $routes->get('dashboard', 'AdminController\Dashboard::index');
    $routes->match(['GET', 'POST'], '/login', 'AdminController\LoginController::index');


    $routes->group('banner', function ($routes) {
        $routes->get('/', 'AdminController\BannerController::index');
        $routes->match(['get', 'post'], 'create/', 'AdminController\BannerController::create');
        $routes->match(['get', 'post'], 'edit/(:num)', 'AdminController\BannerController::edit/$1');
        $routes->get('delete/(:num)', 'AdminController\BannerController::delete/$1');
    });

    $routes->group('testimonials', function ($routes) {
        $routes->get('/', 'AdminController\TestimonialsController::index');
        $routes->match(['get', 'post'], 'create/', 'AdminController\TestimonialsController::create');
        $routes->match(['get', 'post'], 'edit/(:num)', 'AdminController\TestimonialsController::edit/$1');
        $routes->get('delete/(:num)', 'AdminController\TestimonialsController::delete/$1');
    });

    $routes->group('product', function ($routes) {
        $routes->get('/', 'AdminController\ProductController::index');
        $routes->match(['get', 'post'], 'create/', 'AdminController\ProductController::create');
        $routes->match(['get', 'post'], 'edit/(:num)', 'AdminController\ProductController::edit/$1');
        $routes->get('delete/(:num)', 'AdminController\ProductController::delete/$1');
    });

    $routes->get('logout', 'AdminController\Dashboard::logout');

    // Message routes
    $routes->get('message', 'AdminController\MessageController::index'); // Display messages
    $routes->get('message/delete/(:num)', 'AdminController\MessageController::delete/$1'); // Delete a message
});