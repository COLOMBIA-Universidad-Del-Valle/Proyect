<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Clientes</title>
  <link rel="stylesheet" href="{{ asset('css/job/client.css') }}">
</head>
<body>

  <div class="contenedor">
    <h1 class="titulo">Gestión de Clientes</h1>

    <form id="create-client-form" class="formulario">
      <div class="campo">
        <label for="client-name">Nombre del Cliente</label>
        <input type="text" id="client-name" placeholder="Ingrese el nombre del cliente" required>
      </div>
      <div class="campo">
        <label for="client-email">Correo Electrónico</label>
        <input type="email" id="client-email" placeholder="Ingrese el correo del cliente" required>
      </div>
      <button type="submit" class="btn crear">Crear Cliente</button>
    </form>

    <table class="tabla">
      <thead>
        <tr>
          <th>#</th>
          <th>Nombre</th>
          <th>Correo Electrónico</th>
          <th>Acciones</th>
        </tr>
      </thead>
      <tbody id="client-list">
        <!-- Filas generadas dinámicamente -->
      </tbody>
    </table>
  </div>
  <x-formt></x-formt>

  <script>
    document.getElementById('create-client-form').addEventListener('submit', function(e) {
      e.preventDefault();

      const name = document.getElementById('client-name').value;
      const email = document.getElementById('client-email').value;

      if (name && email) {
        const table = document.getElementById('client-list');
        const row = table.insertRow();
        const idCell = row.insertCell(0);
        const nameCell = row.insertCell(1);
        const emailCell = row.insertCell(2);
        const actionCell = row.insertCell(3);

        idCell.textContent = table.rows.length;
        nameCell.textContent = name;
        emailCell.textContent = email;

        const deleteButton = document.createElement('button');
        deleteButton.textContent = 'Eliminar';
        deleteButton.className = 'btn eliminar';
        deleteButton.onclick = function() {
          table.deleteRow(row.rowIndex - 1);
        };

        actionCell.appendChild(deleteButton);

        // Limpiar formulario
        document.getElementById('client-name').value = '';
        document.getElementById('client-email').value = '';
      }
    });
  </script>

</body>
</html>
