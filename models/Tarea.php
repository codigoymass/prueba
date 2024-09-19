<?php

require_once '../conn.php';

class Tareas extends Connection
{

  public function __construct()
  {
    parent::__construct();
  }

  public function listar()
  {
    $res = $this->con->prepare("SELECT
      t.id,
      t.nombre,
      t.fecha_creacion,
      t.estado_id,
      e.estado
      FROM tareas AS t
      INNER JOIN estados AS e ON e.id = t.estado_id
    ");
    $res->execute();

    return $res;
  }

  public function insertar($nombre)
  {
    $res = $this->con->prepare('INSERT INTO tareas(nombre, fecha_creacion, estado_id) VALUES(:nombre, NOW(), 1);');
    $res->bindParam(':nombre', $nombre);
    $res->execute();

    return $res;
  }

  public function cambiar_estado($id, $estado_id)
  {
    $res = $this->con->prepare('UPDATE tareas SET estado_id = :estado_id WHERE id = :id;');
    $res->bindParam(':estado_id', $estado_id);
    $res->bindParam(':id', $id);
    $res->execute();

    return $res;
  }

  public function eliminar($id)
  {
    $res = $this->con->prepare('DELETE FROM tareas WHERE id = :id;');
    $res->bindParam(':id', $id);
    $res->execute();

    return $res;
  }
}
