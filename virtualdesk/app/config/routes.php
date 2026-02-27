<?php if(!defined('ROOT_PATH')) exit('No direct script access allowed');



require_once CORE_PATH.'Router.php';

require_once CORE_PATH.'Route.php';

require_once CONTROLLER_PATH.'Landing_default.php';

$router = new Router(URL_ACTUAL);



/* Rutas */

$router->add('','Landing_default::index');



$router->add('agents/soporte','Landing_default::agentsS');
$router->add('agents/prospeccion','Landing_default::agentsP');
$router->add('agents/consultor','Landing_default::agentsC');
$router->add('agents/marketing','Landing_default::agentsM');
$router->add('users','Landing_default::aUsers');
$router->add('users/add', 'Landing_default::addUser');
$router->add('users/delete/:id', 'Landing_default::deleteUser');
$router->add('new-pass','Landing_default::editPass');

$router->add('login', 'Landing_default::login');
$router->add('login/check', 'Landing_default::loginCheck');
$router->add('logout', 'Landing_default::logout');

$router->run();