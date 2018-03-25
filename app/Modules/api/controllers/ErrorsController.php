<?php

namespace Zemit\Api\Controllers;

/**
 * Contrôleur pour les pages d'erreurs ou de codes http spécifiques
 * @author Julien Turbide <jturbide@nuagerie.com>
 * @version 1.0.0
 */
class ErrorsController extends AbstractController
{
    
    /**
     * Par défaut, on forward vers ErrorsController::fatalAction()
     * Page d'erreur fatale - 500 Internal Server Error
     * @see ErrorsController::fatalAction();
     */
    public function indexAction()
    {
        $this->dispatcher->forward(array(
            'action' => 'notFound'
        ));
    }
    
    /**
     * Page d'erreur fatale - 500 Internal Server Error
     */
    public function fatalAction()
    {
        $this->response->setStatusCode(500, 'Internal Server Error');
        return $this->restError();
    }
    
    /**
     * Page introuvable - 404 Not Found
     */
    public function notFoundAction()
    {
        $this->response->setStatusCode(404, 'Not Found');
        return $this->restError();
    }
    
    /**
     * Page inaccessible - 403 Forbidden
     */
    public function forbiddenAction()
    {
        $this->response->setStatusCode(403, 'Forbidden');
        return $this->restError();
    }
    
    /**
     * Accès non autorisé - 401 Unauthorized
     */
    public function unauthorizedAction()
    {
        $this->response->setStatusCode(401, 'Unauthorized');
        return $this->restError();
    }
    
    /**
     * Mauvaise requête - 400 Bad Request
     */
    public function badRequestAction()
    {
        $this->response->setStatusCode(400, 'Bad Request');
        return $this->restError();
    }
    
    /**
     * Service indisponible ou maintnance en cours - 503 Service Unavailable
     */
    public function maintenanceAction()
    {
        $this->response->setStatusCode(503, 'Service Unavailable');
        return $this->restError();
    }
    
    /**
     * Usage:
     * <code>
     * public function notFoundAction() {
     * $this->response->setStatusCode(404, 'Not Found');
     * return $this->restError();
     * }
     * </code>
     *
     * @param type $error
     *
     * @return Array Return an array of the error, request information, and the exceptions thrown
     */
    public function restError($error = null)
    {
        $status = $this->response->getStatusCode();
        $statusCode = (int)$this->filter->sanitize($this->response->getStatusCode(), 'int', 500);
        $exception = $this->dispatcher->getParam('exception');
        $exceptions = array();
        if (empty($error)) {
            $error = \Phalcon\Text::uncamelize(
                $this->dispatcher->getControllerName() . '_' . $this->dispatcher->getActionName() . '_' . $statusCode
            );
        }
        
        do {
            $exceptions [] = self::exceptionToArray($exception);
        } while ($exception && $exception = $exception->getPrevious());
        
        return array(
            'error' => true,
            'from' =>
                __NAMESPACE__ . '\\'
                . ucfirst($this->dispatcher->getPreviousControllerName())
                . '->' . $this->dispatcher->getPreviousActionName() . '()',
            'type' => $error,
            'status' => $status,
            'code' => $statusCode,
            
            'request' => array(
                'params' => $this->request->get(),
                'body' => $this->request->getRawBody(),
                'referer' => $this->request->getHTTPReferer(),
                'scheme' => $this->request->getScheme(),
                'host' => $this->request->getHttpHost(),
                'clientAddress' => $this->request->getClientAddress(),
                'isAjax' => $this->request->isAjax(),
                'isDelete' => $this->request->isDelete(),
                'isGet' => $this->request->isGet(),
                'isPost' => $this->request->isPost(),
                'isPut' => $this->request->isPut(),
                'options' => $this->request->isOptions(),
                'status' => $status,
                'code' => $statusCode,
            ),
            
            'exceptions' => $exceptions,
        );
    }
    
    public static function exceptionToArray($exception)
    {
        return $exception ? array(
            'code' => $exception->getCode(),
            'message' => $exception->getMessage(),
            'file' => $exception->getFile(),
            'line' => $exception->getLine(),
            'traceString' => explode("\n", $exception->getTraceAsString()),
            'trace' => $exception->getTrace(),
            'exception' => $exception,
        ) : array();
    }
}
