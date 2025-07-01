<?php

// $routes->get('/', 'Main::index');
$routes->get('/', 'Home::index'); //Pembetulan nama controller
$routes->post('home/tambah', 'Home::tambah'); //Pergantian method get menjadi post
