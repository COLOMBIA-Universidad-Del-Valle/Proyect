<link rel="stylesheet" href="{{ asset('css/components/formt.css') }}">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

<div class="sidebar" id="miDiv">
  <h2>Invoice Day</h2>
  <p>{{ session('usuario') }}</p>
  <p>{{ session('correo') }}</p>

  <ul class="sidebar_list">

    <li class="sidebar_element">
      <a class="sidebar_text" href="{{ url('job') }}">
        <i class='bx bx-briefcase'></i>
        <h4> Work Table</h4>
      </a>
    </li>
    <li class="sidebar_element">
      <a class="sidebar_text" href="{{ url('client') }}">
       
        <h4>  <i class='bx bx-user-plus'></i> Customers</h4>
      </a></li>
    <li class="sidebar_element">
      <a class="sidebar_text" href="{{ url('invoice') }}">
        <i class='bx bx-file'></i>
        <h4> Invoice</h4>
      </a></li>
    <li class="sidebar_element">
      <a class="sidebar_text" href="{{ url('price') }}">
        <i class='bx bx-clipboard'></i>
        <h4> Price</h4>
      </a></li>
    <li class="sidebar_element">
      <a class="sidebar_text" href="#" id="openModal">
        <i class='bx bx-cog'></i>
        <h4> Configuration</h4>
      </a></li>
    <li class="sidebar_element">
      <a class="sidebar_text" href="{{ url('index') }}">
        <i class='bx bx-reply'></i>
        <h4> Exit</h4>
      </a></li>

  </ul>
</div>


<div id="configModal" class="modal">
  <div class="modal-content">
    <span class="close" id="closeModal">&times;</span>
    <h3>Configuration Settings</h3>
    <ul>
      <li><a href="#">General Settings</a></li>
      <li><a href="#">User Management</a></li>
      <li><a href="#">Security Settings</a></li>
      <li><a href="#">Theme Customization</a></li>
      <li><a href="#">SEO Configuration</a></li>
      <li><a href="#">Integrations</a></li>
      <li><a href="#">Notification Settings</a></li>
      <li><a href="#">Languages & Translations</a></li>
    </ul>
  </div>
</div>

<script src="{{asset('css/job/main.js') }}"></script>