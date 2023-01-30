<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Abstracts\ModuleController as BaseModuleController;

class PostController extends BaseModuleController
{
    protected $moduleName = 'posts';

    /**
     * @var array<string, bool>
     */
    protected $indexOptions = [
        'create' => true,
        'edit' => true,
        'publish' => true,
        'bulkPublish' => true,
        'feature' => false,
        'bulkFeature' => false,
        'restore' => true,
        'bulkRestore' => false,
        'forceDelete' => true,
        'bulkForceDelete' => false,
        'delete' => true,
        'duplicate' => false,
        'bulkDelete' => false,
        'reorder' => true,
        'permalink' => false,
        'bulkEdit' => true,
        'editInModal' => false,
        'skipCreateModal' => false,
        'includeScheduledInList' => false,
    ];
}
