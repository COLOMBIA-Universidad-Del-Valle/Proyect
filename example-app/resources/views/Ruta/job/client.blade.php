<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>

    <link rel="stylesheet" href="{{ asset('css/job/client.css') }}">
</head>
<body>
  <div class="navbar">
    <h2>Menú</h2>
    <div class="navbar-links">
        <a href="{{('index')}}">Inicio</a>
        <a href="{{('/login')}}">Login</a>
        <a href="">Registro</a>
        <a href="{{('password_recovery')}}">Recuperar Contraseña</a>
        <a href="#">Salir</a>
    </div>
</div>
    <div class="container mt-5">
        <h1 class="mb-4">Gestión de Clientes</h1>
        
        <!-- Formulario para crear cliente -->
        <form id="create-client-form" class="mb-4">
            <div class="mb-3">
                <label for="client-name" class="form-label">Nombre del Cliente</label>
                <input type="text" class="form-control" id="client-name" placeholder="Ingrese el nombre del cliente" required>
            </div>
            <div class="mb-3">
                <label for="client-email" class="form-label">Correo Electrónico</label>
                <input type="email" class="form-control" id="client-email" placeholder="Ingrese el correo del cliente" required>
            </div>
            <button type="submit" class="btn btn-primary">Crear Cliente</button>
        </form>

        <!-- Tabla para listar y eliminar clientes -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Correo Electrónico</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody id="client-list">
                <!-- Aquí se agregarán dinámicamente los clientes -->
            </tbody>
        </table>
    </div>

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
                deleteButton.className = 'btn btn-danger btn-sm';
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