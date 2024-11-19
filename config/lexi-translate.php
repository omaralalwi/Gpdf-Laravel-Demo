<?php

use Omaralalwi\LexiTranslate\Enums\Language;

return [

    /*
    |--------------------------------------------------------------------------
    | Translations Table Name
    |--------------------------------------------------------------------------
    |
    | Define the database table name for storing translations. You can change
    | this to match your application’s preferences to avoid table conflicts
    | with other packages or project-specific tables.
    |
    */
    'table_name' => 'lexi_translations',

    /*
    |--------------------------------------------------------------------------
    | Enable Translation Caching
    |--------------------------------------------------------------------------
    |
    | Set this to true to enable caching of translations. Caching helps improve
    | performance, especially for large-scale applications by reducing database
    | queries. Disable caching during development or if your data is highly
    |
    */

    'use_cache' => true,


    'cache_prefix' => 'lexi_trans',

    /*
    |--------------------------------------------------------------------------
    | Cache Time-to-Live (TTL) in Hours
    |--------------------------------------------------------------------------
    |
    | If caching is enabled, you can define the cache duration (TTL) in hours.
    | The translations will remain cached for this period, after which the cache
    | use the default cache TTL from the application.
    |
    | Example: 6 hours is default cache settings
    |
    */
    'cache_ttl' => 6, // Cache translations for 6 hours

    /*
    |--------------------------------------------------------------------------
    | Supported Locales
    |--------------------------------------------------------------------------
    |
    | Specify the list of supported locales in your application. These locales
    | are used when creating translations from requests. You can add as many
    | performance, avoid adding unused locales.
    |
    | Example: ['en', 'ar', 'fr', 'es']
    |
    | we use just following locales in our system
    */
    'supported_locales' => [
        Language::EN->value,
        Language::AR->value,
        Language::RU->value,
        Language::ZH->value,
        Language::FR->value,
    ],

];
