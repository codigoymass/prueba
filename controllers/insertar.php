<?php

require_once '../models/Tarea.php';

$nombre = isset($_POST['nombre']) ? $_POST['nombre'] : '';

$res = (new Tareas)->insertar($nombre);

echo ($res) ? "La tarea ha sido creada correctamente" : "Hubo un problema al crear el registro";
