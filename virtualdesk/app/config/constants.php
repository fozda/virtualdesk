<?php if(!defined('ROOT_PATH')) exit('No direct script access allowed');





/*--- Definición de directorios dinámicos generales ---*/

define('APP_PATH', ROOT_PATH.'app/');

define('MODEL_PATH', APP_PATH.'models/');

define('VIEWS_PATH', ROOT_PATH.'views/');

define('CONTROLLER_PATH', APP_PATH.'controllers/');

define('CONFIG_PATH', APP_PATH.'config/');

define('CORE_PATH', APP_PATH.'core/');



/*--- Definición de URLs dinámicas generales ---*/

define('ROOT_URL', CUSTOM_DIR);

define('APP_URL', ROOT_URL.'app/');

define('MODEL_URL', APP_URL.'models/');

define('VIEWS_URL', ROOT_URL.'views/');

define('CONTROLLER_URL', APP_URL.'controllers/');

define('CONFIG_URL', APP_URL.'config/');

define('CORE_URL', APP_URL.'core/');

define('STATIC_URL',VIEWS_URL.'static/');
define('PRIVKEY','7jaSa={w7azF');




/*--- URL actual ---*/



define('URL_ACTUAL', $_SERVER['REQUEST_URI']);