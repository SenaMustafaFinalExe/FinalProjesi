<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
#$routes->get('/register', 'Home::register');
$routes->match(['get', 'post'], '/register', 'Home::register');
#$routes->get('/login', 'Home::login');
$routes->match(['get', 'post'], '/uyelogin', 'Home::uyegiris');
$routes->match(['get', 'post'], '/adminpanel', 'Admin::adminpanel');
$routes->match(['get', 'post'], '/adminlogin', 'Admin::adminlogin');
$routes->match(['get', 'post'], '/login', 'Admin::login');
$routes->match(['get', 'post'], '/adminregister', 'Admin::adminregister');

$routes->get('/whoweare', 'Home::whoweare');
$routes->get('/workshoptotal', 'Home::workshoptotal');
$routes->get('/aboutus', 'Home::aboutus');
$routes->get('/contact', 'Home::contact');
$routes->get('/ecourse', 'Home::ecourse');
$routes->get('/care', 'Home::care');
$routes->get('/aksesuar', 'Home::aksesuar');
$routes->get('/cantalar', 'Home::cantalar');
$routes->get('/products', 'Home::Products');
$routes->get('/workshop', 'Home::workshop');

