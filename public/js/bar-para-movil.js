const navToggle = document.querySelector(".nav-toggle")
const navmenu = document.querySelector(".nav-menu")

navToggle.addEventListener("click", () =>{
navmenu.classList.toggle("nav-menu_visible");
});