listar();
const modal_form = new bootstrap.Modal('#modal_form');

function listar() {

    fetch('controllers/listar.php')
    .then(res => res.json())
    .then(data => {

        // Validar si no hay registros
        if(data.length == 0) {
            document.getElementById('table_data').innerHTML = `<tr><td colspan="3" class="text-center">¡No hay tareas para listar!</td></tr>`;
            return;
        }

        let str = '';
        data.map(item => {
          str += `<tr>
                      <td>${item.nombre}</td>
                      <td>
                        <select class="form-select" onchange="cambiar_estado(${item.id}, this.value)">
                          <option value="1" ${(item.estado_id == 1) ? 'selected' : null}>Pendiente</option>
                          <option value="2" ${(item.estado_id == 2) ? 'selected' : null}>Realizada</option>
                          <option value="3" ${(item.estado_id == 3) ? 'selected' : null}>Cancelada</option>
                        </select>
                      </td>
                      <td>${item.fecha_creacion}</td>
                      <td class="text-center">
                        <button class="btn btn-sm btn-danger" onclick="eliminar(${item.id})">Eliminar</button>
                      </td>
                  </tr>`
        });

        document.getElementById('table_data').innerHTML = str;

    });

}

function insertar() {

  let formData = new FormData();
  formData.append('nombre', document.getElementById('txt_nombre').value);

  fetch('controllers/insertar.php', {
      method: 'POST',
      body: formData
  })
  .then(res => res.text())
  .then(data => {
      swal.fire({
        icon: 'success',
        title: data,
      });
      limpiar();
      modal_form.hide();
      listar();
  });

}

function cambiar_estado(id, estado_id) {

  let formData = new FormData();
  formData.append('id', id);
  formData.append('estado_id', estado_id);

  fetch('controllers/cambiar_estado.php', {
    method: 'POST',
    body: formData
})
.then(res => res.text())
.then(data => {
    swal.fire({
      icon: 'success',
      title: data,
      toast: true,
      showConfirmButton: false,
      timer: 2500,
      position: 'top-end'
    });
});

}

function eliminar(id) {

    swal.fire({
      icon: 'question',
      title: '¿Quiere eliminar esta tarea?',
      showCancelButton: true,
    })
    .then(result => {
      if(result.isConfirmed) {

        let formData = new FormData();
        formData.append('id', id);
  
        fetch('controllers/eliminar.php', {
          method: 'POST',
          body: formData
        })
        .then(res => res.text())
        .then(data => {
          swal.fire({
            icon: 'success',
            title: data,
          });
        })
        .then(() => {
            listar();
        });

      }
    });

}

function limpiar() {
  document.getElementById('txt_nombre').value = '';
}