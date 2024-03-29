<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/contact', 'contact::index');
$routes->get('/contact2', 'contact2::index');
$routes->get('/Login_v', 'Login_v::index');
$routes->get('/UserLogin', 'UserLogin::index');
$routes->get('/AdminLogin', 'AdminLogin::index');
$routes->get('/signUp', 'signUp::index');
$routes->get('/Home_page', 'Home_page::index');
$routes->get('/About_us', 'About_us::index');
$routes->get('/About_us2', 'About_us2::index');
$routes->get('/Adminpanel', 'Adminpanel::index');
$routes->get('/Ticketpage', 'Ticketpage::index');
$routes->get('/seat', 'seat::index');
$routes->get('/admin_route', 'admin_route::index');
$routes->get('/admin_bus', 'admin_bus::index');
$routes->get('/info', 'info::index');
$routes->get('/seat2', 'seat2::index');
$routes->get('/bilet', 'bilet::index');
$routes->get('/card', 'card::index');
$routes->get('/yolcu', 'yolcu::index');
$routes->get('/admin_odeme', 'admin_odeme::index');
$routes->get('/deneme', 'deneme::index');