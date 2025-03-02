<?php

/*===================
Mostrar errores
====================*/
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', 'C:\xampp\htdocs\errores\php_error_log');

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "modelos/usuarios.modelo.php";

$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();