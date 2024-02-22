<?php

namespace App\Modules\Admin;

class Module extends \Zemit\Modules\Admin\Module
{
    final public function getNamespaces(): array
    {
        return array_merge([
            'App\\Models' => APP_PATH . '/Models/'
        ], parent::getNamespaces());
    }
}
