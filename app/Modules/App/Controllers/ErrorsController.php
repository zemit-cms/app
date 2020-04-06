<?php

namespace App\Modules\App\Controllers;

class ErrorsController extends AbstractController
{
    public function initialize()
    {
        parent::initialize();
        $this->view->pick('errors/index');
    }
    
    public function indexAction()
    {
        $this->dispatcher->forward(array(
            'action' => 'notFound'
        ));
    }
    
    public function fatalAction()
    {
        $this->response->setStatusCode(500, 'Internal Server Error');
    }
    
    public function notFoundAction()
    {
        $this->response->setStatusCode(404, 'Not Found');
    }
    
    public function forbiddenAction()
    {
        $this->response->setStatusCode(403, 'Forbidden');
    }
    
    public function unauthorizedAction()
    {
        $this->response->setStatusCode(401, 'Unauthorized');
    }
    
    public function badRequestAction()
    {
        $this->response->setStatusCode(400, 'Bad Request');
    }
    
    public function maintenanceAction()
    {
        $this->response->setStatusCode(503, 'Service Unavailable');
    }
}
