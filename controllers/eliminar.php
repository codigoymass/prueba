<?php

require_once '../models/Tarea.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';

$res = (new Tareas)->eliminar($id);

echo ($res) ? "La tarea ha sido eliminada correctamente" : "Hubo un problema al eliminar el registro";
