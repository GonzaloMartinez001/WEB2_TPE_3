<?php

namespace controller;

include_once '.\model\apiCompanyModel.php';
include_once 'apiController.php';

use ApiController;
use model\CompanyModel;

    class ApiCompanyController extends ApiController
    {

        private $companyModel;

        function __construct() {
            parent::__construct();
            $this->companyModel = new CompanyModel();
        }

        function getCompanies() {
            $companies = $this->companyModel->getCompany();
            if($companies)
                $this->view->response($companies);
            else
                $this->view->response("No se encontró ninguna compañía con el ID proporcionado.", 404);
        }

        function getCompany($params = []) {
            $id = $params[':ID'];
            $company = $this->companyModel->getCompanyByID($id);
            if ($company) {

                $this->view->response($company);
            } else {
                $this->view->response("No se encontró ninguna compañía con el ID proporcionado.", 404);
            }
        }



    }
