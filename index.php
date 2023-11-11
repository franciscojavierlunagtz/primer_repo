<?php

date_default_timezone_set('America/Mexico_City');
ini_set('display_errors', 1);
ini_set('log_errors', 1);
ini_set('error_log', 'C:/xampp/htdocs/lastraspinv/php_error_log');

require_once "controllers/template.controller.php";
require_once "controllers/usuarios.controlador.php";
require_once "controllers/sistemas.controlador.php";
require_once "controllers/hardware.controlador.php";
require_once "controllers/hardwareToChange.controlador.php";
require_once "controllers/tickets.controlador.php";
require_once "models/usuarios.modelo.php";
require_once "models/sistemas.modelo.php";
require_once "models/hardware.modelo.php";
require_once "models/hardwareToChange.modelo.php";
require_once "models/tickets.modelo.php";

$index = new TemplateController();
$index -> index();

