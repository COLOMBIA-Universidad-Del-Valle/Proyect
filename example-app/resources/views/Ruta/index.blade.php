<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{asset('css/style.css') }}">
</head>
<body>
        <header>
            <nav class="navbar">               
                <div class="logo"><a href="#" ><h1>Invoice Day</h1></a></div>
                
                    <ul class="nav-links" id="navLinks">
                   
                        <li><a href="#" data-target="Services">Services</a></li>
                        <li><a href="#" data-target="Update">Updates</a></li>
                        <li><a href="#" data-target="Projects">Projects</a></li>
                        <li><a href="#" data-target="Contact">Contact</a></li>

                    </ul>

                    <ul class="nav-links" id="navLinks">
                        <li><a href="#" class="action_btn"> Login </a></li>
                        <li><a href="#" class="action_btn"> Create a new account </a></li>
                    </ul>

                <div class="menu-toggle" id="menuToggle"> &#9776;</div>
            </nav>

            <div class="dropdown_menu">

               
                   <li><a href="#" class="action_btn"> Login </a></li>
                   <li><a href="#" class="action_btn"> Create a new account </a></li>
              
                   
                   <li><a href="#" data-target="Services">Services</a></li>
                   <li><a href="#" data-target="Update">Updates</a></li>
                   <li><a href="#" data-target="Projects">Projects</a></li>
                   <li><a href="#" data-target="Contact">Contact</a></li>

               
               
            </div>
        </header>

        <div class="parent" id="Services" style="display: none;">
  <div class="div1">
    <h1>Services</h1>
  </div>

  <div class="div2">
    <p>If you need any of these services, please contact us or visit our facilities. We're here to help you.</p>
  </div>

  <div class="div3">
    <p>We offer a range of services including:</p>
    <ul>
      <li>🖥️ Laptop lending for students and faculty</li>
      <li>🎧 Accessory loans (mice, headsets, projectors)</li>
      <li>🔧 Preventive maintenance for institutional equipment</li>
      <li>📚 Access to licensed educational software</li>
      <li>💬 Technical support and assistance</li>
    </ul>
  </div>

  
</div>

        <div class="parent" id="Update" style="display: none;">
            <div class="div1"> <h1> hola</h1> </div>
            <div class="div2"> hola </div>
            <div class="div3"> </div>
         
        </div>
        <div class="parent" id="Projects" style="display: none;">
            <div class="div1"> <h1>esta </h1> </div>
            <div class="div2"> hola </div>
            <div class="div3"> </div>
         
        </div>
        <div class="parent" id="Contact" style="display: none;">
            <div class="div1"> <h1> hoas</h1> </div>
            <div class="div2"> hola </div>
            <div class="div3"> </div>
         
        </div>

        <script>
            const sections = document.querySelectorAll('.parent');
            const links = document.querySelectorAll('[data-target]');

           
            const toggleBtn = document.querySelector('.toggle_btn');
  const toggleBtnIcon = document.querySelector('.toggle_btn i');
  const dropDownMenu = document.querySelector('.dropdown_menu');

  toggleBtn.onclick = function () {
    dropDownMenu.classList.toggle('open');
    const isOpen = dropDownMenu.classList.contains('open');

    toggleBtnIcon.className = isOpen
      ? 'fa-solid fa-xmark'
      : 'fa-solid fa-bars';
  };




            links.forEach(link => {
            link.addEventListener('click', (e) => {
        e.preventDefault();
        const target = link.getAttribute('data-target');
        sections.forEach(section => {
        section.style.display = (section.id === target) ? 'grid' : 'none';
            });
            });
        });
</script>

</body>
</html>
