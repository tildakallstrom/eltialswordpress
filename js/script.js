/*Tilda Källström 2022*/
function hamburgermenu(m) {
  m.classList.toggle("change");
}

/* mobilemenu*/
let navbar = document.querySelector(".navbar")
let ham = document.querySelector(".ham")

function toggleHamburger() {
  navbar.classList.toggle("showNav")
  ham.classList.toggle("showClose")
}
ham.addEventListener("click", toggleHamburger)

