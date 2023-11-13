<?php
    require_once 'config.php';
    require_once 'libs/router.php';
    require_once 'controllers/apiCompanyController.php';

    $router = new Router();

    #                 endpoint      verbo     controllers           método
$router->addRoute('companies', 'GET', 'controller\ApiCompanyController', 'getCompanies');
$router->addRoute('companies/:ID', 'GET', 'controller\ApiCompanyController', 'getCompany');


$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);