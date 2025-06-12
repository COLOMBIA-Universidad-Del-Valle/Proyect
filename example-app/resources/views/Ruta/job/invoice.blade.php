<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Crear Factura</title>
  <link rel="stylesheet" href="{{ asset('css/job/invoice.css') }}">
</head>
<body>

 
  <div class="contenedor">
    <h1 class="titulo">Crear Factura</h1>

    <form id="invoice-form" class="formulario">
      <div class="fila">
        <div class="campo">
          <label for="seller">Vendedor</label>
          <input type="text" id="seller" placeholder="Nombre del vendedor">
        </div>
        <div class="campo">
          <label for="date">Fecha</label>
          <input type="date" id="date">
        </div>
      </div>

      <div class="fila">
        <div class="campo">
          <label for="purchaseOrder">Orden de Compra</label>
          <input type="text" id="purchaseOrder" placeholder="Número de orden de compra">
        </div>
        <div class="campo">
          <label for="logo">Logo</label>
          <input type="file" id="logo">
        </div>
      </div>

      <div class="fila">
        <div class="campo">
          <label for="billingAddress">Dirección de Facturación</label>
          <textarea id="billingAddress" rows="3" placeholder="Dirección de facturación"></textarea>
        </div>
        <div class="campo">
          <label for="shippingAddress">Dirección de Envío</label>
          <textarea id="shippingAddress" rows="3" placeholder="Dirección de envío"></textarea>
        </div>
      </div>

      <h4>Items</h4>
      <table class="tabla">
        <thead>
          <tr>
            <th>Descripción</th>
            <th>Cantidad</th>
            <th>Precio Unitario</th>
            <th>Total</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody id="itemsTable">
          <tr>
            <td><input type="text" placeholder="Descripción"></td>
            <td><input type="number" placeholder="Cantidad"></td>
            <td><input type="number" placeholder="Precio Unitario"></td>
            <td><input type="number" placeholder="Total" readonly></td>
            <td><button type="button" class="btn eliminar" onclick="removeItem(this)">Eliminar</button></td>
          </tr>
        </tbody>
      </table>
      
      <button type="button" class="btn agregar" onclick="addItem()">Agregar Item</button>

      <div class="acciones">
        <button type="submit" class="btn guardar">Guardar Factura</button>
      </div>
    </form>
  </div>
  
 <x-formt></x-formt>

  <script>
    function addItem() {
      const table = document.getElementById('itemsTable');
      const row = document.createElement('tr');
      row.innerHTML = `
        <td><input type="text" placeholder="Descripción"></td>
        <td><input type="number" placeholder="Cantidad"></td>
        <td><input type="number" placeholder="Precio Unitario"></td>
        <td><input type="number" placeholder="Total" readonly></td>
        <td><button type="button" class="btn eliminar" onclick="removeItem(this)">Eliminar</button></td>
      `;
      table.appendChild(row);
    }

    function removeItem(button) {
      button.closest('tr').remove();
    }
  </script>

</body>
</html>
