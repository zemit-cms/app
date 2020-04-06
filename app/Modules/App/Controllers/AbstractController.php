<?php

namespace App\Modules\App\Controllers;

use App\Modules\App\Controller;
use Zemit\Tag;

abstract class AbstractController extends Controller
{
    public function initialize() {
        Tag::setAttr('html', ['lang' => $this->dispatcher->getParam('language', 'string', 'en')]);
    }
}
