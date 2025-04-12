<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Factura</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body style="overflow: scroll">



    <div class="container mt-5">
        <div class="row">
            <div class="col-12 text-center mb-4">
                <h1>Crear Factura</h1>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-6">
                <label for="seller" class="form-label">Vendedor</label>
                <input type="text" id="seller" class="form-control" placeholder="Nombre del vendedor">
            </div>
            <div class="col-6">
                <label for="date" class="form-label">Fecha</label>
                <input type="date" id="date" class="form-control">
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-6">
                <label for="purchaseOrder" class="form-label">Orden de Compra</label>
                <input type="text" id="purchaseOrder" class="form-control" placeholder="Número de orden de compra">
            </div>
            <div class="col-6">
                <label for="logo" class="form-label">Logo</label>
                <input type="file" id="logo" class="form-control">
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-6">
                <label for="billingAddress" class="form-label">Dirección de Facturación</label>
                <textarea id="billingAddress" class="form-control" rows="3" placeholder="Dirección de facturación"></textarea>
            </div>
            <div class="col-6">
                <label for="shippingAddress" class="form-label">Dirección de Envío</label>
                <textarea id="shippingAddress" class="form-control" rows="3" placeholder="Dirección de envío"></textarea>
            </div>
        </div>
        <div class="row mb-4">
            <div class="col-12">
                <h4>Items</h4>
                <table class="table table-bordered">
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
                            <td><input type="text" class="form-control" placeholder="Descripción"></td>
                            <td><input type="number" class="form-control" placeholder="Cantidad"></td>
                            <td><input type="number" class="form-control" placeholder="Precio Unitario"></td>
                            <td><input type="number" class="form-control" placeholder="Total" readonly></td>
                            <td><button class="btn btn-danger btn-sm" onclick="removeItem(this)">Eliminar</button></td>
                        </tr>
                    </tbody>
                </table>
                <button class="btn btn-primary" onclick="addItem()">Agregar Item</button>
            </div>
        </div>
        <div class="row">
            <div class="col-12 text-end">
                <button class="btn btn-success">Guardar Factura</button>
            </div>
        </div>
    </div>
    
<x-formt>

</x-formt>


    <script>
        function addItem() {
            const table = document.getElementById('itemsTable');
            const row = document.createElement('tr');
            row.innerHTML = `
                <td><input type="text" class="form-control" placeholder="Descripción"></td>
                <td><input type="number" class="form-control" placeholder="Cantidad"></td>
                <td><input type="number" class="form-control" placeholder="Precio Unitario"></td>
                <td><input type="number" class="form-control" placeholder="Total" readonly></td>
                <td><button class="btn btn-danger btn-sm" onclick="removeItem(this)">Eliminar</button></td>
            `;
            table.appendChild(row);
        }

        function removeItem(button) {
            button.closest('tr').remove();
        }
    </script>
</body>
</html>