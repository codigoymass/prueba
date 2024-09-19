<!DOCTYPE html>
<html lang="es-CO">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Prueba tareas</title>

  <link href="https://necolas.github.io/normalize.css/8.0.1/normalize.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

  <body class="bg-light d-flex justify-content-center">

    <div class="container bg-white rounded p-4 col-xl-10 col-lg-10 mt-5">

      <div class="d-flex justify-content-between align-items-center">
        <h2 class="w-100 mb-4" id="lbl_titulo">Lista de usuarios</h2>
        <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_form" onclick="limpiar()">Agregar</button>
      </div>

      <table class="table table-hover">

        <thead class="table-dark">
          <tr>
            <th>Nombre</th>
            <th>Estado</th>
            <th>Fecha creación</th>
            <th style="width: 10px;"></th>
          </tr>
        </thead>
        <tbody id="table_data"></tbody>

      </table>

    </div>

    <!-- MODAL FORM -->
    <div class="modal fade" id="modal_form" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Crea la tarea</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body row">

            <div class="col-lg-12 mb-3">
              <label for="txt_nombre" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="txt_nombre" autocomplete="off">
            </div>

          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary" onclick="insertar()">Guardar</button>
          </div>
        </div>
      </div>
    </div>
    <!-- END MODAL FORM -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="app.js"></script>
  </body>

</html>