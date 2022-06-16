<?php

require 'include/Slim-2.x/Slim/Slim.php';
\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim();

// GET route
$app->get(
    '/',
    function () {

        require_once("view/index.php");

    }
);

$app->get(
    '/acupuntura',
    function () {

    	require_once("view/acupuntura.php");

    }
);

$app->get(
    '/naturologia',
    function () {

    	require_once("view/naturologia.php");

    }
);

$app->get(
    '/tratamentos',
    function () {

    	require_once("view/tratamentos.php");

    }
);

$app->get(
    '/depoimentos',
    function () {

    	require_once("view/depoimentos.php");

    }
);

$app->get(
    '/contatos',
    function () {

    	require_once("view/contatos.php");

    }
);

$app->run();

