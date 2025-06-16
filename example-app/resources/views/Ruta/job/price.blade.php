<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Generar Cotización</title>
  <link rel="stylesheet" href="{{ asset('css/job/client.css') }}">
  <link rel="stylesheet" href="{{ asset('css/components/body.css') }}">
</head>

<body>
  <x-formt></x-formt>
  <div class="container" style="overflow: scroll;">
    <h1 class="title">Generar Cotización</h1>

    <form id="cotizacionForm" class="form" method="POST" action="/price" enctype="multipart/form-data">
      @csrf

      <div class="field">
        <label for="nombre">Nombre de la Cotización</label>
        <input type="text" id="nombre" name="nombre" required placeholder="Ej: Cotización Servicio Mantenimiento" />
      </div>

      <div class="field">
        <label for="cliente">Cliente</label>
        <input type="text" id="cliente" name="cliente" required placeholder="Nombre del cliente" />
      </div>

      <div class="field">
        <label for="logo">Logo (opcional)</label>
        <input type="file" id="logo" name="logo" accept="image/*" />
        <small>Formatos aceptados: JPG, PNG (Max. 2MB)</small>
      </div>

      <div class="field">
        <label for="correo">Correo Electrónico</label>
        <input type="email" id="correo" name="correo" required placeholder="correo@cliente.com" />
      </div>

      <div class="field">
        <label for="telefono">Teléfono de Contacto</label>
        <input type="tel" id="telefono" name="telefono" required />
      </div>

      <div class="field">
        <h2>Items de la Cotización</h2>
        <table id="itemsTable" class="table">
          <thead>
            <tr>
              <th>Descripción</th>
              <th>Cantidad</th>
              <th>Precio Unitario</th>
              <th>Acciones</th>
            </tr>
          </thead>

          <tbody>
            <tr>
              <td data-label="Descripción">
                <input type="text" name="items[0][descripcion]" required placeholder="Descripción del producto/servicio" />
              </td>
              <td data-label="Cantidad">
                <input type="number" name="items[0][cantidad]" min="1" value="1" required />
              </td>
              <td data-label="Precio Unitario">
                <input type="number" name="items[0][precio]" step="0.01" min="0" required placeholder="0.00" />
              </td>
              <td data-label="Acciones">
                <button type="button" class="btn eliminar">Eliminar</button>
              </td>
            </tr>
          </tbody>

        </table>
        <button type="button" class="btn" id="addItem">Agregar Item</button>
      </div>

      <div class="field">
        <button type="submit" class="btn">Generar Cotización PDF</button>
      </div>
    </form>
  </div>




  <script>
    document.getElementById('addItem').addEventListener('click', function() {
      const table = document.getElementById('itemsTable').getElementsByTagName('tbody')[0];
      const rowCount = table.rows.length;
      const row = table.insertRow(rowCount);

      row.innerHTML = `
        <td><input type="text" name="items[${rowCount}][descripcion]" required placeholder="Descripción del producto/servicio" /></td>
        <td><input type="number" name="items[${rowCount}][cantidad]" min="1" value="1" required /></td>
        <td><input type="number" name="items[${rowCount}][precio]" step="0.01" min="0" required placeholder="0.00" /></td>
        <td><button type="button" class="btn eliminar">Eliminar</button></td>
      `;

      row.querySelector('.eliminar').addEventListener('click', function() {
        if (table.rows.length > 1) {
          this.closest('tr').remove();
        } else {
          alert("Debe haber al menos un item en la cotización");
        }
      });
    });

    
    document.querySelector('.eliminar').addEventListener('click', function() {
      const table = document.getElementById('itemsTable').getElementsByTagName('tbody')[0];
      if (table.rows.length > 1) {
        this.closest('tr').remove();
      } else {
        alert("Debe haber al menos un item en la cotización");
      }
    });
  </script>
</body>

</html>