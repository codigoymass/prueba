<?php

require_once '../models/Tarea.php';

$id = isset($_POST['id']) ? $_POST['id'] : '';
$estado_id = isset($_POST['estado_id']) ? $_POST['estado_id'] : '';

$res = (new Tareas)->cambiar_estado($id, $estado_id);
echo ($res) ? "El estado ha sido actualizado correctamente" : "Hubo un problema al actualizar el registro";
