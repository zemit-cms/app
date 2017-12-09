<?php

namespace Zemit\Frontend\Controllers;

/**
 * Contrôleur pour les pages d'erreurs ou de codes http spécifiques
 * @author Julien Turbide <jturbide@nuagerie.com>
 * @version 1.0.1
 * - Added slug finder to handle slugs as an action
 */
class ErrorsController extends AbstractController
{
    /**
     * Errors init
     * - Generic error view, except if slug found for the notFound action
     */
    public function initialize()
    {
        parent::initialize();
        $this->view->pick('errors/index');
    }
    
    /**
     * Default error page
     * 404 Not Found
     * @see ErrorsController::notFoundAction();
     */
    public function indexAction()
    {
        $this->dispatcher->forward(['action' => 'notFound']);
    }
    
    /**
     * 500 Internal Server Error
     */
    public function fatalAction()
    {
        $this->response->setStatusCode(500, 'Internal Server Error');
    }
    
    /**
     * 404 Not Found
     */
    public function notFoundAction()
    {
        $this->response->setStatusCode(404, 'Not Found');
    }
    
    /**
     * 403 Forbidden
     */
    public function forbiddenAction()
    {
        $this->response->setStatusCode(403, 'Forbidden');
    }
    
    /**
     * 401 Unauthorized
     */
    public function unauthorizedAction()
    {
        $this->response->setStatusCode(401, 'Unauthorized');
    }
    
    /**
     * 400 Bad Request
     */
    public function badRequestAction()
    {
        $this->response->setStatusCode(400, 'Bad Request');
    }
    
    /**
     * 503 Service Unavailable
     */
    public function maintenanceAction()
    {
        $this->response->setStatusCode(503, 'Service Unavailable');
    }
}
