<?php

if (!function_exists('get_option')) {
    /**
     * Get / set the specified option value.
     *
     * If an array is passed as the key, we will assume you want to set an array of values.
     *
     * @param  array|string  $key
     * @param  mixed  $default
     * @return mixed|\Appstract\Options\Option
     */
    function get_option($key = null, $default = null)
    {
        if (is_null($key)) {
            return app('option');
        }

        if (is_array($key)) {
            return app('option')->set($key);
        }

        return app('option')->get($key, $default);
    }
}

if (!function_exists('get_option_exists')) {
    /**
     * Check the specified option exits.
     *
     * @param  string  $key
     * @return mixed
     */
    function get_option_exists($key)
    {
        return app('option')->exists($key);
    }
}
