<?php

// Base Url
define('BASE_URL', 'http://localhost/perpustakaan/');

// DB
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'perpus');

// URI SEGMENT
$uri_path = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$uri_segment = explode('/', $uri_path);

define('URI_SEGMENT', $uri_segment[2]);