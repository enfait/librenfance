<?php

$databases = array (
  'default' =>
    array (
      'default' =>
        array (
          'database' => getenv('MYSQL_ENV_MYSQL_DATABASE'),
          'username' => getenv('MYSQL_ENV_MYSQL_USER'),
          'password' => getenv('MYSQL_ENV_MYSQL_PASSWORD'),
          'host' => 'mysql',
          'port' => '',
          'driver' => 'mysql',
          'prefix' => '',
        ),
    ),
);

$update_free_access = FALSE;
$drupal_hash_salt = 'I3D6MoJOlcf2inp2OI-rgB_m99EyHz6bCa1RgezeT1s';

ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 100);
ini_set('session.gc_maxlifetime', 200000);
ini_set('session.cookie_lifetime', 2000000);

$conf['404_fast_paths_exclude'] = '/\/(?:styles)\//';
$conf['404_fast_paths'] = '/\.(?:txt|png|gif|jpe?g|css|js|ico|swf|flv|cgi|bat|pl|dll|exe|asp)$/i';
$conf['404_fast_html'] = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL "@path" was not found on this server.</p></body></html>';

$conf['allow_authorize_operations'] = FALSE;


$site_dir = __DIR__;

if(is_readable($site_dir . DIRECTORY_SEPARATOR . 'settings.local.php')){
  require $site_dir . DIRECTORY_SEPARATOR . 'settings.local.php';
}
