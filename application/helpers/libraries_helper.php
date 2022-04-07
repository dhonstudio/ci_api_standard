<?php

if (ENVIRONMENT == 'development') {
    $path = '/../../';
} else {
    $path = '../../../../';
}

require_once __DIR__ . $path. 'assets/ci_libraries/DhonAuth.php';
require_once __DIR__ . $path. 'assets/ci_libraries/DhonJSON.php';
require_once __DIR__ . $path. 'assets/ci_libraries/DhonMigrate.php';