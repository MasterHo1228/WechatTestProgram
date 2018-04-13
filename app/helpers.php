<?php
/**
 * Created by PhpStorm.
 * User: JonyHo
 * Date: 2018-04-13
 * Time: 16:17
 */

if (!function_exists('config_path')){

    /**
     * Get the configuration path.
     * @param string $path
     * @return string
     */
    function config_path($path=''){
        return app()->basePath() . '/config' . ($path ? '/' . $path : $path);
    }
}