<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Recuperación de contraseña</title>
</head>
<body>
    <h2>Hola, {{ $usuario->nombre }}</h2>
    <p>Hemos recibido una solicitud para recuperar tu contraseña.</p>
    <p>Si fuiste tú, responde o accede al sistema para continuar.</p>
    <p>ID de usuario: <strong>{{ $usuario->id_usuarios }}</strong></p>
</body>
</html>
