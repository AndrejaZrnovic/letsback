<?php

//SHIPS

$router->get('','PagesController@home');
$router->get('ships', 'ShipsController@index');
$router->get('ships/create', 'ShipsController@create');
$router->post('ships/create', 'ShipsController@store');
$router->get('ships/show', 'ShipsController@show');
$router->get('ships/edit', 'ShipsController@edit');
$router->post('ships/edit', 'ShipsController@update');
$router->get('ships/destroy', 'ShipsController@destroy');

//API SHIPS

$router->get('api/ships', 'ApiShipsController@index');
$router->post('api/ships', 'ApiShipsController@store');
$router->get('api/ships/show', 'ApiShipsController@show');
$router->post('api/ships/edit', 'ApiShipsController@update');
$router->get('api/ships/destroy', 'ApiShipsController@destroy');

//CARGOS

$router->get('cargos', 'CargosController@index');
$router->get('cargos/create', 'CargosController@create');
$router->post('cargos/create', 'CargosController@store');
$router->get('cargos/show', 'CargosController@show');
$router->get('cargos/edit', 'CargosController@edit');
$router->post('cargos/edit', 'CargosController@update');
$router->get('cargos/destroy', 'CargosController@destroy');

//API CARGOS

$router->get('api/cargos', 'ApiCargosController@index');
$router->post('api/cargos', 'ApiCargosController@store');
$router->get('api/cargos/show', 'ApiCargosController@show');
$router->post('api/cargos/edit', 'ApiCargosController@update');
$router->get('api/cargos/destroy', 'ApiCargosController@destroy');

//ORDERS

$router->get('orders', 'OrdersController@index');
$router->get('orders/create', 'OrdersController@create');
$router->post('orders/create', 'OrdersController@store');
$router->get('orders/show', 'OrdersController@show');
$router->get('orders/edit', 'OrdersController@edit');
$router->post('orders/edit', 'OrdersController@update');
$router->get('orders/destroy', 'OrdersController@destroy');

//API ORDERS

$router->get('api/orders', 'ApiOrdersController@index');
$router->post('api/orders', 'ApiOrdersController@store');
$router->get('api/orders/show', 'ApiOrdersController@show');
$router->post('api/orders/edit', 'ApiOrdersController@update');
$router->get('api/orders/destroy', 'ApiOrdersController@destroy');


//PORTS

$router->get('ports', 'PortsController@index');
$router->get('ports/create', 'PortsController@create');
$router->post('ports/create', 'PortsController@store');
$router->get('ports/show', 'PortsController@show');
$router->get('ports/edit', 'PortsController@edit');
$router->post('ports/edit', 'PortsController@update');
$router->get('ports/destroy', 'PortsController@destroy');

// API PORTS

$router->get('api/ports', 'ApiPortsController@index');
$router->post('api/ports', 'ApiPortsController@store');
$router->get('api/ports/show', 'ApiPortsController@show');
$router->post('api/ports/edit', 'ApiPortsController@update');
$router->get('api/ports/destroy', 'ApiPortsController@destroy');


// USERS

$router->get('users', 'UsersController@index');
$router->get('users/create', 'UsersController@create');
$router->post('users/create', 'UsersController@store');
$router->get('users/show', 'UsersController@show');
$router->get('users/edit', 'UsersController@edit');
$router->post('users/edit', 'UsersController@update');
$router->get('users/destroy', 'UsersController@destroy');

// API USERS

$router->get('api/users', 'ApiUsersController@index');
$router->post('api/users', 'ApiUsersController@store');
$router->get('api/users/show', 'ApiUsersController@show');
$router->post('api/users/edit', 'ApiUsersController@update');
$router->get('api/users/destroy', 'ApiUsersController@destroy');



// FORMS

$router->get('forms', 'FormsController@index');


// API FORMS

$router->get('api/forms', 'ApiFormsController@index');


// MESSAGES

$router->get('messages', 'MessagesController@index');


// API MESSAGES

$router->get('api/messages', 'ApiMessagesController@index');

//LOGIN

$router->get('login', 'AuthController@login_form');
$router->post('login', 'AuthController@login');
$router->get('register', 'AuthController@register_form');
$router->post('register', 'AuthController@register');
$router->get('logout', 'AuthController@logout');

//CONTACT
$router->get('contact', 'PagesController@contact');





