<?php

namespace app\controllers;

use app\core\Controller;
use app\models\Usuario;
use app\services\UsuarioService;

class UsuarioController extends Controller
{
    private UsuarioService $service;

    public function __construct() {
        $this->service = new UsuarioService();
    }

    public function index() {
        $data['usuarios'] = $this->service->getUsuarios();
        $this->view('usuarios/usuario_list', $data);
    }

    public function cadastrar() {
        $this->view('usuarios/usuario_create');
    }

    public function editar() {
        $id = $_GET['id'];
        $data['usuario'] = $this->service->getUsuarioById($id);
        $this->view('usuarios/usuario_edit', $data);
    }

    public function salvar() {
        $usuario = new Usuario(
            0, 
            $_POST['nomeUsuario'], 
            $_POST['email'], 
            $_POST['senha'], 
            $_POST['perfil']
        );

        $errors = $this->service->saveUsuario($usuario);

        if (empty($errors)) {
          $this->redirect(URL_BASE . '/usuarios');
        } else {
          $errorsToString = implode(',', $errors);

          $this->redirect(URL_BASE . '/usuarios/cadastrar?erro=' . $errorsToString);
        }
    }

    public function atualizar() {
        $usuario = new Usuario(
            $_POST['id'], 
            $_POST['nomeUsuario'], 
            $_POST['email'], 
            $_POST['senha'] ?? '', 
            $_POST['perfil']
        );

        $errors = $this->service->updateUsuario($usuario);

        if (empty($errors)) {
          $this->redirect(URL_BASE . '/usuarios');
        } else {
          $errorsToString = implode(',', $errors);

          $this->redirect(URL_BASE . '/usuarios/editar?id=' . $usuario->getId() . '&erro=' . $errorsToString);
        }
    }

    public function excluir() {
        $id = $_GET['id'];
        $this->service->deleteUsuario($id);
        $this->redirect(URL_BASE . '/usuarios');
    }
}