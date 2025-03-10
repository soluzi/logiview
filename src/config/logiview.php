<?php

return [
    /*
     * ---------------------------------------------------------------
     * LogiView Configuration
     * ---------------------------------------------------------------
     *
     * This configuration file contains settings for the LogiView package.
     * You can modify the route prefix applied to routes here.
     */
    'route_prefix' => env("LOGIVIEW_ROUTE_PREFIX", 'logiview'),

    /*
     * ---------------------------------------------------------------
     * Middleware Configuration
     * ---------------------------------------------------------------
     *
     * The middleware that should be applied to the LogiView routes.
     * You can modify this array to include additional middleware.
     */
    'middleware' => array_merge(['web'], []),
];
