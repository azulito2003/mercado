<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Departamentoss::index');
$routes->get('lista', 'Departamentoss::index');
$routes->get('crear', 'Departamentoss::crear');
$routes->post('guardar', 'Departamentoss::guardar');
$routes->post('borrar', 'Departamentoss::borrar');
$routes->post('editar', 'Departamentoss::editar');
$routes->post('actualizar', 'Departamentoss::actualizar');
$routes->get('categoria', 'Categorias::lista');
$routes->post('crearcate', 'Categorias::crear');
$routes->post('guardarcate', 'Categorias::guardar');
$routes->post('borrarcate', 'Categorias::borrar');
$routes->post('editarcate', 'Categorias::editar');
$routes->post('actualizarcate', 'Categorias::actualizar');
$routes->get('articulo', 'Articulo::lista');
$routes->post('articrear', 'Articulo::crear');
$routes->post('guardararti', 'Articulo::guardar');
$routes->post('borrararti', 'Articulo::borrar');
$routes->post('editararti', 'Articulo::editar');
$routes->post('actualizararti', 'Articulo::actualizar');
$routes->post('busceda', 'Categorias::buscar');
$routes->post('buscedaarti', 'Articulo::buscar');



$routes->get('/eventos', 'Crup::evento');
$routes->get('/agregareven', 'crup::agregareven');
$routes->post('/insertareven', 'crup::insertareven');
$routes->get('/eliminareven/(:num)', 'crup::eliminareven/$1');
$routes->get('/editareven/(:num)', 'crup::editareven/$1');
$routes->post('/actualizareven', 'crup::actualizareven');


$routes->get('/Posts/', 'Posts::index'); // Ruta principal para listar las publicaciones
$routes->get('/posts/create', 'Posts::create'); // Ruta para mostrar el formulario de creación
$routes->post('/posts/store', 'Posts::store'); // Ruta para manejar la lógica de almacenamiento de la publicación
$routes->get('/posts/(:num)', 'Posts::view/$1'); // Ruta para ver una publicación específica
$routes->post('/comments/store', 'Comments::store'); // Ruta para manejar la lógica de almacenamiento de comentarios

// Ruta para mostrar el formulario de registro de usuario
$routes->get('/registro-usuario', 'RegistroUsuarioController::index');
$routes->post('/guardar-usuario', 'RegistroUsuarioController::guardar');
$routes->get('/lista-usuarios', 'RegistroUsuarioController::lista');



