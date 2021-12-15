<?php
define('WEBROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_NAME"]));
define('ROOT', str_replace("Webroot/index.php", "", $_SERVER["SCRIPT_FILENAME"]));

/*echo "ruta del script actual: ",$_SERVER["SCRIPT_NAME"],'<br>';
echo "ruta absoluta del script actual: ",$_SERVER["SCRIPT_FILENAME"],'<br>';

echo 'WEBROOT: ', WEBROOT, '<br/>';
echo 'ROOT: ', ROOT, '<br/>';*/

require(ROOT . 'Config/core.php');

require(ROOT . 'router.php'); // base de datos, modelo y controladores generales
require(ROOT . 'request.php'); // guarda la url de la peticion
require(ROOT . 'dispatcher.php'); // este es el controlador principal

$dispatch = new Dispatcher();
$dispatch->dispatch();
?>