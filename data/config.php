<?php
define('DNS','mysql:host=db;dbname=sample');
define('DB_USER','user');
define('DB_PASSWORD','userpass');
//define('SITE_URL','http://localhost/practice');

error_reporting(E_ALL & ~E_NOTICE);
session_set_cookie_params(1440,'/');