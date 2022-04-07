<?php

$ci = get_instance();

require_once __DIR__ . '/../../assets/ci_libraries/DhonAuth.php';
require_once __DIR__ . '/../../assets/ci_libraries/DhonJSON.php';
require_once __DIR__ . '/../../assets/ci_libraries/DhonMigrate.php';
$ci->dhonauth = new DhonAuth;
$ci->dhonjson = new DhonJSON;