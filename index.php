<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";
require_once "controladores/categorias.controlador.php";
require_once "controladores/clientes.controlador.php";
require_once "controladores/ventas.controlador.php";
require_once 'controladores/empleados.controlador.php';
require_once "controladores/barcos.controlador.php";
require_once "controladores/rutas.controlador.php";
require_once "controladores/reservas.controlador.php";
require_once "modelos/usuarios.modelo.php";
require_once "modelos/categorias.modelo.php";
require_once "modelos/clientes.modelo.php";
require_once "modelos/ventas.modelo.php";
require 'modelos/empleados.modelo.php';
require_once "modelos/barcos.modelo.php";
require_once "modelos/rutas.modelo.php";
require_once "modelos/reservas.modelo.php";
$plantilla = new ControladorPlantilla();
$plantilla -> ctrPlantilla();