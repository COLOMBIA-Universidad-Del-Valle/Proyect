<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Clientes y Facturas</title>

    <link rel="stylesheet" href="{{ asset('css/components/body.css') }}">
    <link rel="stylesheet" href="{{ asset('css/job/client.css') }}">
</head>

<body style="background-color: aqua;">
    <x-formt ></x-formt>

    <div class="container0" style="background-color: blue;  flex: 1;">
        <div class="container" style="background-color: yellowgreen;">
            <h1 class="title">Clientes Destacados</h1>

            <table class="table">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="client-list">

                </tbody>
            </table>


        </div>

        <div class="container" style="background-color: tomato;">
            <h1 class="title">Facturas Recientes</h1>


            <table class="table">
                <thead>
                    <tr>
                        <th>Codigo</th>
                        <th>Cliente</th>
                        <th>Monto</th>
                        <th>Fecha</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody id="invoice-list">


                </tbody>
            </table>
        </div>
    </div>

   
</body>

</html>