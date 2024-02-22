<?php

namespace App\Modules\Api\Controllers;

use Zemit\Mvc\Controller\StatusCode;
use Zemit\Mvc\Controller\Errors;

class ErrorController extends AbstractController
{
    use StatusCode;
    use Errors;
}
