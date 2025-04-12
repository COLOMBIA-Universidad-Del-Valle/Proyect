<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Cotización</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body style="overflow: scroll">
    <div class="container mt-5">

<x-formt>

</x-formt>

        <h1 class="text-center">Generar Cotización</h1>
        <form action="" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="cliente" class="form-label">Cliente</label>
                <input type="text" class="form-control" id="cliente" name="cliente" required>
            </div>
            <div class="mb-3">
                <label for="logo" class="form-label">Logo</label>
                <input type="file" class="form-control" id="logo" name="logo">
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo</label>
                <input type="email" class="form-control" id="correo" name="correo" required>
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Número de Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono" required>
            </div>
            <div class="mb-3">
                <label for="items" class="form-label">Items</label>
                <table class="table table-bordered" id="itemsTable">
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
                            <td><input type="text" class="form-control" name="items[0][descripcion]" required></td>
                            <td><input type="number" class="form-control" name="items[0][cantidad]" required></td>
                            <td><input type="number" class="form-control" name="items[0][precio]" step="0.01" required></td>
                            <td><button type="button" class="btn btn-danger remove-item">Eliminar</button></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-primary" id="addItem">Agregar Item</button>
            </div>
            <button type="submit" class="btn btn-success">Generar Cotización</button>
        </form>
    </div>

    <script>
        document.getElementById('addItem').addEventListener('click', function () {
            const table = document.getElementById('itemsTable').getElementsByTagName('tbody')[0];
            const rowCount = table.rows.length;
            const row = table.insertRow(rowCount);

            row.innerHTML = `
                <td><input type="text" class="form-control" name="items[${rowCount}][descripcion]" required></td>
                <td><input type="number" class="form-control" name="items[${rowCount}][cantidad]" required></td>
                <td><input type="number" class="form-control" name="items[${rowCount}][precio]" step="0.01" required></td>
                <td><button type="button" class="btn btn-danger remove-item">Eliminar</button></td>
            `;

            row.querySelector('.remove-item').addEventListener('click', function () {
                table.deleteRow(row.rowIndex - 1);
            });
        });

        document.querySelectorAll('.remove-item').forEach(button => {
            button.addEventListener('click', function () {
                const row = button.closest('tr');
                row.parentNode.removeChild(row);
            });
        });
    </script>
</body>
</html>