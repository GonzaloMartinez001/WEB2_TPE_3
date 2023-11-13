<?php
    require_once 'config.php';
    require_once 'libs/router.php';
    require_once 'controllers/apiCompanyController.php';

    $router = new Router();

    #                 endpoint      verbo     controllers           método
$router->addRoute('companies', 'GET', 'controller\ApiCompanyController', 'getCompanies');
$router->addRoute('companies/:ID', 'GET', 'controller\ApiCompanyController', 'getCompany');
$router->addRoute('companies', 'POST', 'controller\ApiCompanyController' , 'createCompany');
$router->addRoute('companies/:ID', 'DELETE', 'controller\ApiCompanyController' , 'deleteCompany');
$router->addRoute('companies/:ID', 'PUT', 'controller\ApiCompanyController' , 'editCompany');



$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);