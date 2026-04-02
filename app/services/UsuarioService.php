<?php

namespace app\services;

use app\models\Usuario;
use app\repositories\UsuarioRepository;

class UsuarioService
{
    private UsuarioRepository $repository;

    public function __construct()
    {
        $this->repository = new UsuarioRepository();
    }

    public function getUsuarios(): array
    {
        return $this->repository->getUsuarios();
    }

    public function getUsuarioById(int $id) {
        return $this->repository->getUsuarioById($id);
    }

    public function saveUsuario(Usuario $usuario)
    {
        $errors = [];

        $nomeAlreadyExists =  $this->repository->getUsuarioByNome($usuario->getNomeUsuario());
        if ($nomeAlreadyExists) {
            array_push($errors, ERROR_CODE_USERNAME_EXISTS);
        }

        $emailAlreadyExists = $this->repository->getUsuarioByEmail($usuario->getEmail());
        if ($emailAlreadyExists) {
            array_push($errors, ERROR_CODE_EMAIL_EXISTS);
        }

        if (empty($errors)) {
            $this->repository->saveUsuario($usuario);
        }
        
        return $errors;
    }

    public function updateUsuario(Usuario $usuario) {
      $errors = [];

        $nomeAlreadyExists =  $this->repository->getUsuarioByNome($usuario->getNomeUsuario());
        if ($nomeAlreadyExists) {
            array_push($errors, ERROR_CODE_USERNAME_EXISTS);
        }

        $emailAlreadyExists = $this->repository->getUsuarioByEmail($usuario->getEmail());
        if ($emailAlreadyExists) {
            array_push($errors, ERROR_CODE_EMAIL_EXISTS);
        }

        if (empty($errors)) {
            $this->repository->updateUsuario($usuario);
        }
        
        return $errors;
    }

    public function deleteUsuario(int $id): bool {
        return $this->repository->deleteUsuario($id);
    }
}