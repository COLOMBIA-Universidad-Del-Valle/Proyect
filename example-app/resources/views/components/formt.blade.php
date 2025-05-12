<link rel="stylesheet" href="{{asset('css/formt/formt.css') }}">

<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>  
  
<div class="sidebar">
    <h2>Invoice Day</h2>
    <p>{{ session('usuario') }}</p>
    <p>{{ session('correo') }}</p>
   
    <ul>
        <li><i class='bx  bx-briefcase'></i><a href="{{ url('job') }}">work table</a>    </li>
        <li><i class='bx  bx-user-plus'></i><a href="{{ url('client') }}">customers</a>  </li>
        <li><i class='bx  bx-file'     ></i><a href="{{ url('invoice') }}">invoice</a>   </li>
        <li><i class='bx  bx-clipboard'></i><a href="{{ url('price') }}">price</a>       </li>
        <li><i class='bx  bx-cog'      ></i><a href="#">configuration</a>                      </li>
        <li><i class='bx bx-reply'     ></i><a href="{{ url('index') }}">exit</a>        </li>
    </ul>
</div>
