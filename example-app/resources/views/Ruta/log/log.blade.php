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

<header>
    
  <button class="menu-button" onclick="toggleMenu()">☰ Menu</button>

  <div class="menu-options" id="menuOptions">
    <a href="{{ url('index') }}">Logout</a>
    <a href="{{ url('password_recovery') }}">Password Recovery</a>
    <a  class="register-btna">Register</a>
    <a  class="login-btna">Login</a>
  </div>

</header>

<div class="container">
<div class="form-box login" style="overflow-y: scroll;">
      <form action="#">
    <h1>Login</h1>
    <p>We're waiting for you :</p>

    <div class="input-box">
        <label for="email_login">Email</label>
        <input type="email" id="email_login" name="email_login" placeholder="Email" required>
        <i class='bx bxs-user'></i>
    </div>

    <div class="input-box">
        <label for="password_login">Password</label>
        <input type="password" id="password_login" name="password_login" placeholder="Password" required>
        <i class='bx bxs-lock-alt'></i>
    </div>

    <button type="submit" class="btn">Login</button>

    <div class="forgot-link">
        <p></p>
        <a href="{{ url('password_recovery') }}">Forgot your password?</a>
    </div>
</form>

    </div>

    <div class="form-box register">

    <form action="{{ route('registrar.usuario') }}" method="POST">
        <h1>Create an Account</h1>
        <p>It's quick and easy.</p>

        <div class="input-box">
            <label for="full_name">Full Name</label>
            <input type="text" id="full_name" name="full_name" placeholder="Full Name" required>
            <i class='bx bxs-user'></i>
        </div>

        <div class="input-box">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Email" required>
            <i class='bx bxs-envelope'></i>
        </div>

        <div class="input-box">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Password" required>
            <i class='bx bxs-lock-alt'></i>
        </div>

        <button type="submit" class="btn"  >Register</button>
          @csrf

    </form>
</div>


    <div class="toggle-box">
        <div class="toggle-panel toggle-left">
            <h1 style="color:white ;">Hello, welcome!</h1>
            <p>Don't have an account?</p>
            <button class="btn register-btn">Register</button>
        </div>

        <div class="toggle-panel toggle-right">
            <h1>Welcome back!</h1>
            <p>Already have an account?</p>
            <button class="btn login-btn">Login</button>
        </div>
    </div>
</div>


    <script src="{{asset('css/log/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('success'))
<script>
    window.onload = function() {
        Swal.fire({
            icon: 'success',
            title: '¡Registro exitoso!',
            text: "{{ session('success') }}",
            confirmButtonText: 'Aceptar'
        });
    }
</script>
@endif

@if ($errors->any())
    <script>
        window.onload = function () {
            Swal.fire({
                icon: 'error',
                title: 'Errores de validación',
                html: `{!! implode('<br>', $errors->all()) !!}`,
                confirmButtonText: 'Aceptar'
            });
        };
    </script>
@endif


</body>
</html>