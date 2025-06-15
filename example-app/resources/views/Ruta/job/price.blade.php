<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Generar Cotización</title>
  <link rel="stylesheet" href="{{ asset('css/job/price.css') }}" >
</head>
<body>
  <div class="contenedor">
    <h1 class="titulo">Generar Cotización</h1>

    <form id="cotizacionForm" class="formulario">
      <div class="fila">
        <div class="campo">
          <label for="nombre">Nombre de la Cotización</label>
          <input type="text" id="nombre" name="nombre" required placeholder="Ej: Cotización Servicio Mantenimiento" />
        </div>
        <div class="campo">
          <label for="cliente">Cliente</label>
          <input type="text" id="cliente" name="cliente" required placeholder="Nombre del cliente" />
        </div>
      </div>
      <div class="fila">
        <div class="campo">
          <label for="logo">Logo (opcional)</label>
          <input type="file" id="logo" name="logo" accept="image/*" />
          <small>Formatos aceptados: JPG, PNG (Max. 2MB)</small>
        </div>
        <div class="campo">
          <label for="correo">Correo Electrónico</label>
          <input type="email" id="correo" name="correo" required placeholder="correo@cliente.com" />
        </div>
        <div class="campo">
          <label for="telefono">Teléfono de Contacto</label>
          <input type="tel" id="telefono" name="telefono" required />
        </div>
      </div>

      <div class="fila">
        <div class="campo">
          <h2>Items de la Cotización</h2>
          <table id="itemsTable" class="tabla">
            <thead>
              <tr>
                <th><label for="descripcion">Descripción</label> </th>
                <th><label for="cantidad">Cantidad</label>  </th>
                <th> <label for="precio">Precio Unitario</label> </th>
                <th>  Acciones</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                
                <input type="text" id="descripcion" name="descripcion" required placeholder="Descripción del producto/servicio" /></td>
                
                <td>
              
                <input type="number" name="cantidad" id="cantidad" min="1" value="1" required /></td>
                <td><input type="number" id="precio" name="precio" step="0.01" min="0" required placeholder="0.00" /></td>
                <td><button type="button" class="btn eliminar">Eliminar</button></td>
              </tr>
            </tbody>
          </table>
          <button type="button" class="btn agregar" id="addItem">Agregar Item</button>
        </div>
      </div>

      <div class="fila">
        <div class="campo">
          <button type="submit" class="btn guardar">Generar Cotización PDF</button>
        </div>
      </div>
    </form>
  </div>
  <x-formt></x-formt>

  <script>
    document.getElementById('addItem').addEventListener('click', function () {
      const table = document.getElementById('itemsTable').getElementsByTagName('tbody')[0];
      const rowCount = table.rows.length;
      const row = table.insertRow(rowCount);

      row.innerHTML = `
        <td><input type="text" name="items[${rowCount}][descripcion]" required placeholder="Descripción del producto/servicio" /></td>
        <td><input type="number" name="items[${rowCount}][cantidad]" min="1" value="1" required /></td>
        <td><input type="number" name="items[${rowCount}][precio]" step="0.01" min="0" required placeholder="0.00" /></td>
        <td><button type="button" class="btn eliminar">Eliminar</button></td>
      `;

      row.querySelector('.eliminar').addEventListener('click', function () {
        if (table.rows.length > 1) {
          this.closest('tr').remove();
        } else {
          alert("Debe haber al menos un item en la cotización");
        }
      });
    });

    // Inicializar evento para el primer botón de eliminar
    document.querySelector('.eliminar').addEventListener('click', function () {
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
