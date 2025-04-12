<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Clientes y Facturas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <header class="bg-primary text-white text-center py-3">
            <h1>Gestión de Clientes y Facturas</h1>
        </header>

        <div class="row mt-4">
            <!-- Sidebar -->
            <aside class="col-md-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action active">Clientes</a>
                    <a href="#" class="list-group-item list-group-item-action">Facturas</a>
                    <a href="#" class="list-group-item list-group-item-action">Reportes</a>
                    <a href="#" class="list-group-item list-group-item-action">Configuración</a>
                </div>
            </aside>

            <!-- Main Content -->
            <main class="col-md-9">
                <div class="card">
                    <div class="card-header">
                        <h2>Clientes Destacados</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nombre</th>
                                    <th>Email</th>
                                    <th>Teléfono</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Juan Pérez</td>
                                    <td>juan.perez@example.com</td>
                                    <td>+123456789</td>
                                    <td>
                                        <button class="btn btn-sm btn-info">Ver</button>
                                        <button class="btn btn-sm btn-warning">Editar</button>
                                        <button class="btn btn-sm btn-danger">Eliminar</button>
                                    </td>
                                </tr>
                                <!-- Más filas de ejemplo -->
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card mt-4">
                    <div class="card-header">
                        <h2>Facturas Recientes</h2>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Cliente</th>
                                    <th>Monto</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>101</td>
                                    <td>Juan Pérez</td>
                                    <td>$500.00</td>
                                    <td>2023-10-01</td>
                                    <td>Pagada</td>
                                </tr>
                                <!-- Más filas de ejemplo -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>