document.addEventListener("DOMContentLoaded", function () {
  const barraNavegacion = document.querySelector(".barra-navegacion");
  const stickyOffset = barraNavegacion.offsetTop;
  window.onscroll = function () {
    if(window.pageYOffset >= stickyOffset) {
        barraNavegacion.classList.add("barra-fixed");
    } else {
        barraNavegacion.classList.remove("barra-fixed");
    }
  };
});
