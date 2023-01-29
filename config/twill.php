<?php

return [

    'frontend' => [
        'views_path' => 'site',
    ],
    /*
    |--------------------------------------------------------------------------
    | Twill app locale
    |--------------------------------------------------------------------------
    */

    'locale' => config('app.locale'),
    'fallback_locale' => config('app.fallback_locale'),
    'available_user_locales' => [
        'ru',
        'en',
    ],

    /*
    |--------------------------------------------------------------------------
    | Twill File Library configuration
    |--------------------------------------------------------------------------
    |
    | This allows you to provide the package with your configuration
    | for the file library disk, endpoint type and others options depending
    | on your endpoint type.
    |
    | Supported endpoint types: 'local' and 's3'.
    | Set cascade_delete to true to delete files on the storage too when
    | deleting from the file library.
    | If using the 'local' endpoint type, define a 'local_path' to store files.
    | Supported file services:
    | - 'A17\Twill\Services\FileLibrary\Disk'
    |
    */

    'file_library' => [
        'endpoint_type' => env('FILE_LIBRARY_ENDPOINT_TYPE', 'local'),
        'cascade_delete' => env('FILE_LIBRARY_CASCADE_DELETE', false),
        'local_path' => env('FILE_LIBRARY_LOCAL_PATH', 'uploads'),
        'file_service' => env('FILE_LIBRARY_FILE_SERVICE', 'A17\Twill\Services\FileLibrary\Disk'),
        'acl' => env('FILE_LIBRARY_ACL', 'public-read'),
        'filesize_limit' => env('FILE_LIBRARY_FILESIZE_LIMIT', 50),
        'allowed_extensions' => [],
        'prefix_uuid_with_local_path' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Twill Media Library configuration
    |--------------------------------------------------------------------------
    |
    | This allows you to provide the package with your configuration
    | for the media library disk, endpoint type and others options depending
    | on your endpoint type.
    |
    | Supported endpoint types: 'local' and 's3'.
    | Set cascade_delete to true to delete files on the storage too when
    | deleting from the media library.
    | If using the 'local' endpoint type, define a 'local_path' to store files.
    | Supported image services:
    | - 'A17\Twill\Services\MediaLibrary\Imgix'
    | - 'A17\Twill\Services\MediaLibrary\Local'
    |
    */

    'media_library' => [
        'endpoint_type' => env('MEDIA_LIBRARY_ENDPOINT_TYPE', 'local'),
        'cascade_delete' => env('MEDIA_LIBRARY_CASCADE_DELETE', false),
        'local_path' => env('MEDIA_LIBRARY_LOCAL_PATH', 'uploads'),
        'image_service' => env('MEDIA_LIBRARY_IMAGE_SERVICE', \A17\Twill\Services\MediaLibrary\Glide::class),
        'filesize_limit' => env('MEDIA_LIBRARY_FILESIZE_LIMIT', 50),
        'allowed_extensions' => ['svg', 'jpg', 'gif', 'png', 'jpeg'],
        'init_alt_text_from_filename' => true,
        'prefix_uuid_with_local_path' => config('twill.file_library.prefix_uuid_with_local_path', false),
        'translated_form_fields' => false,
        'show_file_name' => false,
    ],

    /*
    |--------------------------------------------------------------------------
    | Base classes for automatic generation of Modules and Capsules
    |--------------------------------------------------------------------------
    */

    'base_model' => A17\Twill\Models\Model::class,
    'base_translation_model' => A17\Twill\Models\Model::class,
    'base_slug_model' => A17\Twill\Models\Model::class,
    'base_revision_model' => A17\Twill\Models\Revision::class,
    'base_repository' => A17\Twill\Repositories\ModuleRepository::class,
    'base_controller' => \App\Http\Controllers\Abstracts\ModuleController::class,
    'base_nested_controller' => \App\Http\Controllers\Abstracts\NestedModuleController::class,
    'base_singleton_controller' => \App\Http\Controllers\Abstracts\SingletonModuleController::class,
    'base_request' => A17\Twill\Http\Requests\Admin\Request::class,

    'block_editor' => [
        'block_views_path' => 'admin.site.blocks',
        'block_single_layout' => 'layouts.block',
        'body' => [
            'component' => 'a17-block-body',
            'max' => 2,
        ],

    ],
];
