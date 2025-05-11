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
    <a href="{{ url('log#registro') }}" class="register-btna">Register</a>
    <a href="{{ url('log') }}"  class="login-btna">Login</a>
  </div>

</header>

   <div class="container">
    <div class="form-box login">
        <form action="{{ route('recuperar.password') }}" method="POST">
    @csrf
    <h1>Password Recovery</h1>
    <p>If you're not registered, you won't be able to recover your password because no password exists.</p>
    
    <div class="input-box">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Email" required>
        <i class='bx bxs-user'></i>
    </div>

    <button type="submit" class="btn">Recover</button>

    <div class="forgot-link">
        <p></p>
        <a href="{{ url('log') }}">Did you remember?</a>
    </div>
</form>
    </div>
</div>

        

      <div class="toggle-box">
    <div class="toggle-panel toggle-left">
        <h1>Hello, welcome!</h1>
        <p>Don't have an account?</p>
        <a href="{{ url('log#registro') }}" class="btn register-btn" style="align-items: center; justify-content: center; display: flex; text-align: center;">Register</a>
    </div>

            
         
        </div>
    </div>

    <script src="{{asset('css/log/main.js') }}"> </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if (session('error'))
<script>
    window.onload = function () {
        Swal.fire({
            icon: 'error',
            title: 'Error',
            text: "{{ session('error') }}",
            confirmButtonText: 'OK'
        });
    };
</script>
@endif

@if (session('success'))
<script>
    window.onload = function () {
        Swal.fire({
            icon: 'success',
            title: 'Correo enviado',
            text: "{{ session('success') }}",
            confirmButtonText: 'OK'
        });
    };
</script>
@endif

</body>
</html>