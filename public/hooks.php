<?php

/**
 * WebHooks manager (WIP)
 */

if (!isset($_SERVER['PHP_AUTH_USER'])) {
    header('WWW-Authenticate: Basic realm="EVAL DFS"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'Please authenticate';
    exit;
} else {
    if ($_SERVER['PHP_AUTH_PW']) {
	$output = shell_exec('php /var/www/html/flarum/flarum schedule:run');
        echo "<pre>$output</pre>";
    } else {
        die();
    }
}


