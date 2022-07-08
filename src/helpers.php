<?php

if (!function_exists('get_option')) {
    /**
     * Get the specified option value.
     *
     *
     * @param  array|string  $key
     * @param  mixed  $default
     * @return mixed|\Forwardcode\LaravelOptions\Model\Option
     */
    function get_option($key = null, $default = null)
    {
        return app('option')->get($key, $default);
    }
}

if (!function_exists('set_option')) {
    /**
     * Get / set the specified option value.
     *
     * If an array is passed as the key, we will assume you want to set an array of values.
     *
     * @param  array|string  $key
     * @param  mixed  $default
     * @return mixed|\Appstract\Options\Option
     */
    function set_option($key = null, $default = null)
    {
        return app('option')->set($key, $default);
    }
}

if (!function_exists('option_exists')) {
    /**
     * Check the specified option exits.
     *
     * @param  string  $key
     * @return mixed
     */
    function option_exists($key)
    {
        return app('option')->exists($key);
    }
}
