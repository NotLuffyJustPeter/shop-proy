const body = document.querySelector("body"),
      nav = document.querySelector("nav"),
      modeToggle = document.querySelector(".dark-light"),
      searchToggle = document.querySelector(".searchToggle"),
      sidebarOpen = document.querySelector(".sidebarOpen"),
      siderbarClose = document.querySelector(".siderbarClose");
//  footer = document.getElementById('footer'),
//  formulario=document.getElementById('formulario'),
//  contacto=document.getElementById('contacto'),
//  preguntas=document.getElementById('preguntas');
//  const nosotros=document.getElementById('nosotros');
//  const nosotros2=document.getElementById('nosotros2');

let getMode = localStorage.getItem("mode");
if (getMode && getMode === "dark-mode") {
  body.classList.add("dark");
  // footer.classList.add("footer-dark-mode");
  // formulario.classList.add("formulario-dark");
  // contacto.classList.add("contacto-dark");
  // preguntas.classList.add("preguntas-dark");
  // nosotros.classList.add("nosotros-dark");
  // nosotros2.classList.add("nosotros2-dark");
}

// js code to toggle dark and light mode
  modeToggle.addEventListener("click", () => {
  modeToggle.classList.toggle("active");
  body.classList.toggle("dark");
  // footer.classList.toggle("footer-dark-mode");
  // formulario.classList.toggle("formulario-dark");
  // contacto.classList.toggle("contacto-dark");
  // preguntas.classList.toggle("preguntas-dark");
  // nosotros.classList.toggle("nosotros-dark");
  // nosotros2.classList.toggle("nosotros2-dark");



  // js code to keep user selected mode even page refresh or file reopen
  if (!body.classList.contains("dark")) {
    localStorage.setItem("mode", "light-mode");
  } else {
    localStorage.setItem("mode", "dark-mode");
  }
});

// js code to toggle search box
searchToggle.addEventListener("click", () => {
  searchToggle.classList.toggle("active");
});

//   js code to toggle sidebar
sidebarOpen.addEventListener("click", () => {
  nav.classList.add("active");
});

body.addEventListener("click", (e) => {
  let clickedElm = e.target;

  if (
    !clickedElm.classList.contains("sidebarOpen") &&
    !clickedElm.classList.contains("menu")
  ) {
    nav.classList.remove("active");
  }
});
