<?php
if (php_sapi_name() != 'cli-server') {
    header('location: index.php');
    exit;
}

if (preg_match('/\.(?:png|jpg|jpeg|gif|css|js)$/', parse_url($_SERVER["REQUEST_URI"])['path'])) {
    return false;
}

define('WP_HOME','http://localhost:8000');
define('WP_SITEURL','http://localhost:8000');
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);
ini_set("log_errors", 1);
ini_set("error_log", __DIR__.'/php_error.log');

$filename = $_SERVER['SCRIPT_FILENAME'];
if (file_exists($filename)) {
    chdir(dirname($filename));
    include $filename;
} else {
    include 'index.php';
}

if (function_exists('is_admin') && is_admin()) {
    deactivate_plugins(
        array(
            ABSPATH . '/wp-content/plugins/pluginA/pluginA.php',
            ABSPATH . '/wp-content/plugins/pluginB/pluginB.php',
        )
    );
}
