<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Invoice Day - Facturación Electrónica</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
  <style>
    /* Variables de color según tu paleta */
    :root {
      --color-primario: #333399;
      --color-secundario: #ffffff;
      --color-terciario: #888484;
    }
    
    body {
      font-family: 'Arial', sans-serif;
      margin: 0;
      padding: 0;
      background-color: #f9f9f9;
      color: #333;
    }
    
    .navbar {
      background: var(--color-primario);
      color: var(--color-secundario);
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 15px 30px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    }
    
    .logo a {
      color: var(--color-secundario);
      text-decoration: none;
      font-size: 1.5em;
      font-weight: 700;
    }
    
    .nav-links {
      display: flex;
      list-style: none;
      gap: 25px;
      margin: 0;
      padding: 0;
    }
    
    .nav-links li a {
      color: var(--color-secundario);
      text-decoration: none;
      transition: all 0.3s ease;
      font-size: 0.95em;
    }
    
    .nav-links li a:hover {
      opacity: 0.8;
    }
    
    .action_btn {
      background: var(--color-secundario);
      color: var(--color-primario) !important;
      padding: 8px 20px;
      border-radius: 4px;
      font-weight: 600;
      border: 1px solid transparent;
      transition: all 0.3s;
    }
    
    .action_btn:hover {
      background: transparent;
      border-color: var(--color-secundario);
      color: var(--color-secundario) !important;
    }
    
    .menu-toggle {
      display: none;
      cursor: pointer;
      font-size: 1.5em;
    }
    
    .dropdown_menu {
      display: none;
      background: var(--color-primario);
      padding: 20px;
      position: absolute;
      right: 30px;
      top: 70px;
      border-radius: 5px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.1);
      width: 200px;
    }
    
    .dropdown_menu li {
      list-style: none;
      margin: 12px 0;
    }
    
    .dropdown_menu.open {
      display: block;
    }
    
    .parent {
      display: none;
      padding: 40px;
      max-width: 1200px;
      margin: 30px auto;
      background: var(--color-secundario);
      border-radius: 8px;
      box-shadow: 0 2px 15px rgba(0,0,0,0.05);
    }
    
    .parent .div1 h1 {
      color: var(--color-primario);
      border-bottom: 2px solid var(--color-terciario);
      padding-bottom: 10px;
      margin-top: 0;
    }
    
    .div2 {
      color: var(--color-terciario);
      margin: 15px 0 25px;
      line-height: 1.6;
    }
    
    .div3 ul {
      padding-left: 20px;
    }
    
    .div3 li {
      margin-bottom: 10px;
      color: #555;
    }
    
    .div3 i {
      color: var(--color-primario);
      margin-right: 8px;
      width: 20px;
    }
    
    @media (max-width: 768px) {
      .nav-links {
        display: none;
      }
      
      .menu-toggle {
        display: block;
      }
      
      .parent {
        padding: 30px 20px;
        margin: 20px 15px;
      }
    }
  </style>
</head>
<body>
  <header>
    <nav class="navbar">               
      <div class="logo"><a href="#"><h1>Invoice Day</h1></a></div>
      
      <ul class="nav-links">
        <li><a href="#" data-target="Services">Funcionalidades</a></li>
        <li><a href="#" data-target="Update">Actualizaciones</a></li>
        <li><a href="#" data-target="Plans">Planes</a></li>
        <li><a href="#" data-target="Contact">Contacto</a></li>
      </ul>

      <ul class="nav-links">
        <li><a href="#" class="action_btn">Iniciar sesión</a></li>
        <li><a href="#" class="action_btn">Registro</a></li>
      </ul>

      <div class="menu-toggle" id="menuToggle">&#9776;</div>
    </nav>

    <div class="dropdown_menu" id="dropdownMenu">
      <li><a href="#" class="action_btn">Iniciar sesión</a></li>
      <li><a href="#" class="action_btn">Registro</a></li>
      <li><a href="#" data-target="Services">Funcionalidades</a></li>
      <li><a href="#" data-target="Update">Actualizaciones</a></li>
      <li><a href="#" data-target="Plans">Planes</a></li>
      <li><a href="#" data-target="Contact">Contacto</a></li>
    </div>
  </header>

  <div class="parent" id="Services">
    <div class="div1">
      <h1>Funcionalidades Principales</h1>
    </div>
    <div class="div2">
      <p>Descubre cómo Invoice Day puede simplificar tu facturación electrónica y gestión empresarial.</p>
    </div>
    <div class="div3">
      <ul>
        <li><i class="fas fa-file-invoice-dollar"></i> Facturación electrónica con validación SAT</li>
        <li><i class="fas fa-chart-line"></i> Reportes financieros en tiempo real</li>
        <li><i class="fas fa-users-cog"></i> Gestión de clientes y proveedores</li>
        <li><i class="fas fa-cloud"></i> Almacenamiento en la nube seguro</li>
        <li><i class="fas fa-mobile-alt"></i> App móvil para facturar desde cualquier lugar</li>
        <li><i class="fas fa-sync-alt"></i> Integración con sistemas contables</li>
      </ul>
    </div>
  </div>

  <div class="parent" id="Update">
    <div class="div1">
      <h1>Últimas Actualizaciones</h1>
    </div>
    <div class="div2">
      <p>Mantente al día con las nuevas funcionalidades que hemos implementado.</p>
    </div>
    <div class="div3">
      <ul>
        <li><strong>Versión 2.1:</strong> Nuevo diseño de interfaz más intuitivo</li>
        <li><strong>Versión 2.0:</strong> Integración con bancos para conciliación automática</li>
        <li><strong>Versión 1.9:</strong> Soporte para facturación</li>
      </ul>
    </div>
  </div>

  <div class="parent" id="Plans">
    <div class="div1">
      <h1>Nuestros Planes</h1>
    </div>
    <div class="div2">
      <p>Elige el plan que mejor se adapte a las necesidades de tu negocio.</p>
    </div>
    <div class="div3">
      <ul>
        <li><i class="fas fa-store"></i> <strong>Básico:</strong> Ideal para pequeños negocios (50 facturas/mes)</li>
        <li><i class="fas fa-building"></i> <strong>Profesional:</strong> Para medianas empresas (facturación ilimitada)</li>
        <li><i class="fas fa-industry"></i> <strong>Empresarial:</strong> Solución completa con soporte prioritario</li>
      </ul>
    </div>
  </div>

  <div class="parent" id="Contact">
    <div class="div1">
      <h1>Contacto y Soporte</h1>
    </div>
    <div class="div2">
      <p>Estamos aquí para ayudarte. Contáctanos por cualquier duda o consulta.</p>
    </div>
    <div class="div3">
      <ul>
        <li><i class="fas fa-envelope"></i> <strong>Email:</strong> soporte@invoiceday.com</li>
        <li><i class="fas fa-phone-alt"></i> <strong>Teléfono:</strong> +52 55 1234 5678</li>
        <li><i class="fas fa-clock"></i> <strong>Horario:</strong> Lunes a Viernes 7:00 - 18:00 hrs</li>
        <li><i class="fas fa-map-marker-alt"></i> <strong>Oficinas:</strong> Santander de quilichao</li>
      </ul>
    </div>
  </div>

  <script>
    // Menú hamburguesa
    const menuToggle = document.getElementById('menuToggle');
    const dropdownMenu = document.getElementById('dropdownMenu');
    
    menuToggle.addEventListener('click', function() {
      dropdownMenu.classList.toggle('open');
      this.innerHTML = dropdownMenu.classList.contains('open') ? '✕' : '&#9776;';
    });
    
    // Navegación entre secciones
    document.querySelectorAll('[data-target]').forEach(link => {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        const targetId = this.getAttribute('data-target');
        
        // Ocultar todas las secciones
        document.querySelectorAll('.parent').forEach(section => {
          section.style.display = 'none';
        });
        
        // Mostrar la sección objetivo
        document.getElementById(targetId).style.display = 'block';
        
        // Cerrar el menú móvil si está abierto
        if(dropdownMenu.classList.contains('open')) {
          dropdownMenu.classList.remove('open');
          menuToggle.innerHTML = '&#9776;';
        }
        
        // Scroll suave hacia la sección
        document.getElementById(targetId).scrollIntoView({ behavior: 'smooth' });
      });
    });
    
    // Mostrar la sección de Funcionalidades por defecto
    window.addEventListener('DOMContentLoaded', function() {
      document.getElementById('Services').style.display = 'block';
    });
  </script>
</body>
</html>