<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Clientes y Facturas</title>
    <link rel="stylesheet" href="{{ asset('css/job/complet.css') }}">
</head>
<body>


    <div class="contenedor">
        <header class="encabezado">
            <h1>Gestión de Clientes y Facturas</h1>
        </header>

        <main class="contenido-principal">
            <section class="seccion-card">
                <div class="card">
                    <div class="card-header">
                        <h2>Clientes Destacados</h2>
                    </div>
                    <div class="card-body">
                        <table class="tabla">
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
                                        <button class="btn ver">Ver</button>
                                        <button class="btn editar">Editar</button>
                                        <button class="btn eliminar">Eliminar</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>

            <section class="seccion-card">
                <div class="card">
                    <div class="card-header">
                        <h2>Facturas Recientes</h2>
                    </div>
                    <div class="card-body">
                        <table class="tabla">
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
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </main>
    </div>

     <x-formt></x-formt>
</body>
</html>
