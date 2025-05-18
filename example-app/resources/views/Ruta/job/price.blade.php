<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generar Cotización - Invoice Day</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
    <style>
        /* Variables de color según tu paleta */
        :root {
            --color-primario: #333399;
            --color-secundario: #ffffff;
            --color-terciario: #888484;
        }
        
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }
        
        .container {
            max-width: 1000px;
            margin: 30px auto;
            padding: 30px;
            background: var(--color-secundario);
            border-radius: 8px;
            box-shadow: 0 2px 15px rgba(0,0,0,0.05);
        }
        
        h1 {
            color: var(--color-primario);
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid var(--color-terciario);
            padding-bottom: 15px;
        }
        
        .form-label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--color-primario);
        }
        
        .form-control {
            width: 100%;
            padding: 10px 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 16px;
            transition: border 0.3s;
            box-sizing: border-box;
            margin-bottom: 5px;
        }
        
        .form-control:focus {
            border-color: var(--color-primario);
            outline: none;
            box-shadow: 0 0 0 2px rgba(51, 51, 153, 0.2);
        }
        
        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s;
            font-weight: 600;
        }
        
        .btn-primary {
            background-color: var(--color-primario);
            color: var(--color-secundario);
        }
        
        .btn-primary:hover {
            background-color: #2a2a82;
        }
        
        .btn-danger {
            background-color: #dc3545;
            color: var(--color-secundario);
        }
        
        .btn-danger:hover {
            background-color: #bb2d3b;
        }
        
        .btn-success {
            background-color: #28a745;
            color: var(--color-secundario);
        }
        
        .btn-success:hover {
            background-color: #218838;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        
        th {
            background-color: var(--color-primario);
            color: var(--color-secundario);
            padding: 12px;
            text-align: left;
        }
        
        td {
            padding: 12px;
            border-bottom: 1px solid #ddd;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        .mb-3 {
            margin-bottom: 20px;
        }
        
        .text-center {
            text-align: center;
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 20px;
                margin: 20px 15px;
            }
            
            table {
                display: block;
                overflow-x: auto;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1><i class="fas fa-file-invoice-dollar"></i> Generar Cotización</h1>
        <form action="" method="POST" enctype="multipart/form-data">
            
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre de la Cotización</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required placeholder="Ej: Cotización Servicio Mantenimiento">
            </div>
            <div class="mb-3">
                <label for="cliente" class="form-label">Cliente</label>
                <input type="text" class="form-control" id="cliente" name="cliente" required placeholder="Nombre del cliente">
            </div>
            <div class="mb-3">
                <label for="logo" class="form-label">Logo (opcional)</label>
                <input type="file" class="form-control" id="logo" name="logo" accept="image/*">
                <small class="text-muted">Formatos aceptados: JPG, PNG (Max. 2MB)</small>
            </div>
            <div class="mb-3">
                <label for="correo" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="correo" name="correo" required placeholder="correo@cliente.com">
            </div>
            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono de Contacto</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" required placeholder="">
            </div>
            
            <div class="mb-3">
                <label class="form-label">Items de la Cotización</label>
                <table id="itemsTable">
                    <thead>
                        <tr>
                            <th>Descripción</th>
                            <th width="120">Cantidad</th>
                            <th width="150">Precio Unitario</th>
                            <th width="120">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><input type="text" class="form-control" name="items[0][descripcion]" required placeholder="Descripción del producto/servicio"></td>
                            <td><input type="number" class="form-control" name="items[0][cantidad]" min="1" value="1" required></td>
                            <td><input type="number" class="form-control" name="items[0][precio]" step="0.01" min="0" required placeholder="0.00"></td>
                            <td><button type="button" class="btn btn-danger remove-item"><i class="fas fa-trash-alt"></i> Eliminar</button></td>
                        </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-primary" id="addItem"><i class="fas fa-plus-circle"></i> Agregar Item</button>
            </div>
            
            <div class="text-center">
                <button type="submit" class="btn btn-success"><i class="fas fa-file-pdf"></i> Generar Cotización PDF</button>
            </div>
        </form>
    </div>

    <script>
        document.getElementById('addItem').addEventListener('click', function () {
            const table = document.getElementById('itemsTable').getElementsByTagName('tbody')[0];
            const rowCount = table.rows.length;
            const row = table.insertRow(rowCount);

            row.innerHTML = `
                <td><input type="text" class="form-control" name="items[${rowCount}][descripcion]" required placeholder="Descripción del producto/servicio"></td>
                <td><input type="number" class="form-control" name="items[${rowCount}][cantidad]" min="1" value="1" required></td>
                <td><input type="number" class="form-control" name="items[${rowCount}][precio]" step="0.01" min="0" required placeholder="0.00"></td>
                <td><button type="button" class="btn btn-danger remove-item"><i class="fas fa-trash-alt"></i> Eliminar</button></td>
            `;

            row.querySelector('.remove-item').addEventListener('click', function () {
                if(table.rows.length > 1) {
                    table.deleteRow(row.rowIndex);
                } else {
                    alert("Debe haber al menos un item en la cotización");
                }
            });
        });

        // Inicializar evento para el primer botón de eliminar
        document.querySelector('.remove-item').addEventListener('click', function () {
            const table = document.getElementById('itemsTable').getElementsByTagName('tbody')[0];
            if(table.rows.length > 1) {
                this.closest('tr').remove();
            } else {
                alert("Debe haber al menos un item en la cotización");
            }
        });
    </script>
</body>
</html>