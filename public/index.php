<?php

require_once __DIR__ . '/../app/core/Autoload.php';
require_once __DIR__ . '/../app/config/Config.php';

use app\core\Router;

$router = new Router();

$router->get('/', 'JogadorController@listarTodos');

// Jogador Routes
$router->get('/jogadores', 'JogadorController@listarTodos');
$router->get('/jogadores/jogador', 'JogadorController@verJogador');
$router->get('/jogadores/cadastrar', 'JogadorController@criar');

$router->post('/jogadores/salvar', 'JogadorController@salvar');
$router->get('/jogadores/editar', 'JogadorController@editar');
$router->post('/jogadores/atualizar', 'JogadorController@atualizar');
$router->get('/jogadores/excluir', 'JogadorController@excluir');

//Autenticacao
$router->get('/login', 'AutenticacaoController@login');
$router->post('/logar', 'AutenticacaoController@logar');


// Usuarios Routes
$router->get('/usuarios', 'UsuarioController@index');
$router->get('/usuarios/cadastrar', 'UsuarioController@cadastrar');

$router->post('/usuarios/salvar', 'UsuarioController@salvar');
$router->get('/usuarios/editar', 'UsuarioController@editar');
$router->post('/usuarios/atualizar', 'UsuarioController@atualizar');
$router->get('/usuarios/excluir', 'UsuarioController@excluir');

// Gerentes Routes
$router->get('/gerentes', 'GerenteController@index');
$router->get('/gerentes/cadastrar', 'GerenteController@cadastrar');

$router->run();
