<?php

require_once '../models/Tarea.php';

$rspta = (new Tareas)->listar();

$data = [];

while ($item = $rspta->fetch(PDO::FETCH_OBJ)) {
  $data[] = $item;
}

echo json_encode($data);
