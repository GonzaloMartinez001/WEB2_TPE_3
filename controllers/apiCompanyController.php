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

        function createCompany($params = []) {
            $body = $this->getData();
            $company_name = $body->company_name;
            if (empty($company_name)) {
                $this->view->response("Complete los datos", 400);
            }
            $id = $this->companyModel->insertCompany($company_name);
            $company_name = $this->companyModel->getCompany($id);
            $this->view->response($company_name , 201);
        }

        function deleteCompany($params = []) {
            $id = $params[':ID'];
            $company = $this->companyModel->getCompanyByID($id);
            if($company) {
                $this->companyModel->deleteCompany($id);
                $this->view->response('La tarea con id=' . $id . ' ha sido borrada.', 200);
            }
            else {
                    $this->view->response('La tarea con id='.$id.' no existe.', 404);}
        }

        function updateCompany($params = []) {

        }

    }
