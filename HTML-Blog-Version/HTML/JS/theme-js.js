
// Responsive Menu

function classToggle() {
  const navs = document.querySelectorAll('.navbar-items')

  navs.forEach(nav => nav.classList.toggle('navbar-link-toggle-show'));
}

document.querySelector('.navbar-link-toggle')
  .addEventListener('click', classToggle);




var w = window.innerWidth
|| document.documentElement.clientWidth
|| document.body.clientWidth;

var h = window.innerHeight
|| document.documentElement.clientHeight
|| document.body.clientHeight;

var x = document.getElementById("demo");
x.innerHTML = "Browser inner window width: " + w + ", height: " + h + ".";

