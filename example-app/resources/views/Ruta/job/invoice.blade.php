<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Crear Factura</title>
  <link rel="stylesheet" href="{{ asset('css/job/client.css') }}">
    <link rel="stylesheet" href="{{ asset('css/components/body.css') }}">
</head>
<body>

  <x-formt></x-formt>
 <div class="container" style="overflow: scroll;">
  <h1 class="title">Crear Factura</h1>

  <form id="invoice-form" class="form">
    <div class="field">
      <label for="seller">Vendedor</label>
      <input type="text" id="seller" placeholder="Nombre del vendedor">
    </div>

    <div class="field">
      <label for="date">Fecha</label>
      <input type="date" id="date">
    </div>

    <div class="field">
      <label for="purchaseOrder">Orden de Compra</label>
      <input type="text" id="purchaseOrder" placeholder="Número de orden de compra">
    </div>

    <div class="field">
      <label for="logo">Logo</label>
      <input type="file" id="logo">
    </div>

    <div class="field">
      <label for="billingAddress">Dirección de Facturación</label>
      <textarea id="billingAddress" rows="3" placeholder="Dirección de facturación"></textarea>
    </div>

    <div class="field">
      <label for="shippingAddress">Dirección de Envío</label>
      <textarea id="shippingAddress" rows="3" placeholder="Dirección de envío"></textarea>
    </div>

    <h2>Items</h2>
    <table class="table">
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
          <td data-label="Descripción"><input type="text" placeholder="Descripción"></td>
          <td data-label="Cantidad"><input type="number" placeholder="Cantidad"></td>
          <td data-label="Precio Unitario"><input type="number" placeholder="Precio Unitario"></td>
          <td data-label="Total"><input type="number" placeholder="Total" readonly></td>
          <td data-label="Acciones">
            <button type="button" class="btn delete" onclick="removeItem(this)">Eliminar</button>
          </td>
        </tr>
      </tbody>
    </table>

    <button type="button" class="btn" onclick="addItem()">Agregar Item</button>

    <div class="field">
      <button type="submit" class="btn">Guardar Factura</button>
    </div>
  </form>
</div>

  


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
