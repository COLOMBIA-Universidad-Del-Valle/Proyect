
  const modal = document.getElementById("configModal");
  const btn = document.getElementById("openModal");
  const span = document.getElementById("closeModal");
  const toggleBtn = document.getElementById('toggleSidebar');
const sidebarList = document.querySelector('.sidebar_list');

toggleBtn.addEventListener('click', () => {
  sidebarList.classList.toggle('show');
});


  btn.onclick = function () {
    modal.style.display = "block";
  }

  span.onclick = function () {
    modal.style.display = "none";
  }

  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }

  