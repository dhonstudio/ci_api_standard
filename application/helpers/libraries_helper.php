<?php

/**
 * Load Library
 *
 * Will load library from ci_libraries by Dhon Studio
 *
 * @param	array	$name
 */
function load_library(array $name)
{
    $ci = get_instance();

    if (in_array('dhonauth', $name)) {
        require_once __DIR__ . $ci->path. 'assets/ci_libraries/DhonAuth.php';
        $ci->dhonauth = new DhonAuth;
    }
    
    if (in_array('dhonjson', $name)) {
        require_once __DIR__ . $ci->path. 'assets/ci_libraries/DhonJSON.php';
        $ci->dhonjson = new DhonJSON;
    }
    
    if (in_array('dhonmigrate', $name)) {
        require_once __DIR__ . $ci->path. 'assets/ci_libraries/DhonMigrate.php';
    }
}