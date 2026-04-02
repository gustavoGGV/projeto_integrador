<?php

//Configuração do ambiente
define('DEV_ENVIRONMENT', true);

if (DEV_ENVIRONMENT == true) {
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

//Configuração do Sistema
define('APP_NAME', 'Projeto Integrador');
define('URL_BASE', 'http://localhost:1644');

//Configurações do Banco de dados
define('DB_HOST', 'localhost');
define('DB_NAME', 'db_projeto_integrador');

define('DB_USER', 'custavo');
define('DB_PASS', 'Sounoob99@');

//Códigos de erro dos forms
define('ERROR_CODE_USERNAME_EXISTS', 1);
define('ERROR_CODE_EMAIL_EXISTS', 2);
