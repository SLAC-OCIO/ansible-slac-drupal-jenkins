<?php

 $databases['default']['default'] = array(
   'driver' => 'mysql',
   'database' => 'slac-features',
   'username' => 'root',
   'password' => '',
   'host' => 'localhost',
   'prefix' => '',
 );


$update_free_access = FALSE;
$drupal_hash_salt = '5901afkjshfq3875yfij9487';

$base_url = 'http://slac-features';  // NO trailing slash!

ini_set('session.gc_probability', 1);
ini_set('session.gc_divisor', 100);
ini_set('session.gc_maxlifetime', 200000);
ini_set('session.cookie_lifetime', 2000000);
$conf['404_fast_paths_exclude'] = '/\/(?:styles)\//';
$conf['404_fast_paths'] = '/\.(?:txt|png|gif|jpe?g|css|js|ico|swf|flv|cgi|bat|pl|dll|exe|asp)$/i';
$conf['404_fast_html'] = '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML+RDFa 1.0//EN" "http://www.w3.org/MarkUp/DTD/xhtml-rdfa-1.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><title>404 Not Found</title></head><body><h1>Not Found</h1><p>The requested URL "@path" was not found on this server.</p></body></html>';
$conf['file_private_path']='sites/default/private/files';
$conf['file_public_path']='sites/default/files';
$conf['tile_temporary_path']='sites/default/files/temp';
$conf['site_name'] = 'Features Local Ext-Org';