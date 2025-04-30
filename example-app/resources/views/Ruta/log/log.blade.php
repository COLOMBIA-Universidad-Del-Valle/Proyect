<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup Form</title>
    <link rel="stylesheet" href="{{asset('css/log/style.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="container">
        <div class="form-box login">
            <form action="#">
                <h1>Inicio De Sesion</h1>
                <p>Aca te estamos esperando :)</p>
                <div class="input-box">
                    <input type="email" placeholder="correo" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="contraseña" required>
                    <i class='bx bxs-lock-alt' ></i>
                </div>
               
                    
               
                <button type="submit" class="btn">Login</button>

                <div class="forgot-link">
                    <p></p>
                <a href="#" >¿Has olvidado tu contraseña?</a>
               
                 </div>
            </form>
        </div>

        <div class="form-box register">
            <form action="#">
                <h1>Crea una cuenta</h1>
                <p>Es rapido y facil.</p>
                <div class="input-box">
                    <input type="text" placeholder="Nombre Completo" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="email" placeholder="Correo" required>
                    <i class='bx bxs-envelope' ></i>
                </div>
                <div class="input-box">
                    <input type="password" placeholder="Contraseña" required>
                    <i class='bx bxs-lock-alt' ></i>
                </div>
                <button type="submit" class="btn">Registrarce</button>
                
             
            </form>
        </div>

        <div class="toggle-box">
            <div class="toggle-panel toggle-left">
                <h1>Hola, bienvenido!</h1>
                <p>¿No tienes una cuenta?</p>
                <button class="btn register-btn">Registrate</button>
            </div>

            <div class="toggle-panel toggle-right">
                <h1>¡Bienvenido de nuevo!</h1>
                <p>¿Ya tienes una cuenta?</p>
                <button class="btn login-btn">Ingresar</button>
            </div>
        </div>
    </div>

    <script src="{{asset('css/log/main.js') }}"></script>
</body>
</html>