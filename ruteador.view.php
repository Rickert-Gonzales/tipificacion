<?php

include_once("./controller/controlador_".$controlador.".php");

$objetoControlador = "Controlador".ucfirst($controlador);
$controlador = new $objetoControlador();
$controlador->$accion();
?>