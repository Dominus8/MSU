<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DISK', 'local'),

    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been set up for each driver as an example of the required values.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'throw' => false,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
            'throw' => false,
        ],
        
        //для контактов
        'contacts_image' => [
            'driver' => 'local',
            'root' => storage_path('app/public/contacts_image'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        //для иконок контактов продуктов
        'product_page_ico' => [
            'driver' => 'local',
            'root' => storage_path('app/public/product_page_ico'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        //для слайдов продукта
        'product_slides_image' => [
            'driver' => 'local',
            'root' => storage_path('app/public/product_slides_image'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        //для слайдов продукта
        'product_document' => [
            'driver' => 'local',
            'root' => storage_path('app/public/product_document'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        //для слайдов на главной
        'image_mine_slide' => [
            'driver' => 'local',
            'root' => storage_path('app/public/image_mine_slide'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        //для изображений карточек О нас
        'adout_card_image' => [
            'driver' => 'local',
            'root' => storage_path('app/public/adout_card_image'),
            'url' => env('APP_URL').'/storage',
            'visibility' => 'public',
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
