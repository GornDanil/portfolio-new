<?php

namespace App\Http\Controllers\Abstracts;

use A17\Twill\Exceptions\NoCapsuleFoundException;
use A17\Twill\Facades\TwillCapsules;

abstract class ModuleController extends \A17\Twill\Http\Controllers\Admin\ModuleController
{
    /**
     * @param  mixed  $model
     * @return string
     *
     * @throws NoCapsuleFoundException
     */
    public function getRepositoryClass($model)
    {
        /** @var string $model */
        if (@class_exists($class = "$this->namespace\Repositories\\Admin\\".$model.'Repository')) {
            return $class;
        }

        return TwillCapsules::getCapsuleForModel($model)->getRepositoryClass();
    }
}
