<?php

use App\Core\Enviroments;

require __DIR__ . '/vendor/autoload.php';

/* carrega as variáveis de ambiente para o projeto */
Enviroments::load(__DIR__ . '/config');

if (!isset($_GET['url'])) {
    /* define título da página */
    define('APP_TITLE', ucfirst('home'));

    /* redireciona para a págian inicial */
    require(__DIR__ . '/pages/home.php');
    exit;
}

/* converte a url em array */
$url = explode('/', $_GET['url']);

/* verifica se o arquivo existe para adicionar a página */
$pg = (file_exists(__DIR__ . '/pages//' . $url[0] . '.php') ? $url[0] : '404');

/* define título da página */
define('APP_TITLE', ucfirst(str_replace('-', ' ', $pg)));

/* adiciona a página solicitada */
require(__DIR__ . '/pages//' . $pg . '.php');
exit;
