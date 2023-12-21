document.addEventListener("DOMContentLoaded", function () {
  const body = document.querySelector("body");
  let paginaPrincipal = false;
  if (body.classList.contains("home")) {
    paginaPrincipal = true;
  }
  //en la pagina principal no es visible por defecto
  const barraNavegacion = document.querySelector(".barra-navegacion");

  const stickyOffset = barraNavegacion.offsetTop;
  var ultimaPosicionScroll = window.pageYOffset;

  const gridInicio = document.querySelector(".grid-inicio");

  const verificarVisibilidad = (elem) => {
    if (!elem) {
      return;
    }
    let distance = elem.getBoundingClientRect();
    return (
      distance.top <
        (window.innerHeight || document.documentElement.clientHeight) &&
      distance.bottom > 0
    );
  };

  const scrollHandleNormal = () => {
    if (window.pageYOffset >= stickyOffset) {
      if (window.innerWidth < 768) {
        var posicionActualScroll = window.pageYOffset;

        if (posicionActualScroll > ultimaPosicionScroll) {
          // Scrolleando hacia abajo
          barraNavegacion.classList.add("barra-translate");
        } else if (posicionActualScroll < ultimaPosicionScroll) {
          // Scrolleando hacia arriba
          barraNavegacion.classList.remove("barra-translate");
        }

        // Actualiza la última posición de scroll
        ultimaPosicionScroll = posicionActualScroll;
      }

      barraNavegacion.classList.add("barra-fixed");
    } else {
      barraNavegacion.classList.remove("barra-fixed");
      barraNavegacion.classList.remove("barra-translate");
    }
  };

  const scrollHandleHome = () => {
    if (verificarVisibilidad(gridInicio)) {
      barraNavegacion.classList.add("barra-translate");
    } else {
      if (window.innerWidth < 768) {
        var posicionActualScroll = window.pageYOffset;

        if (posicionActualScroll > ultimaPosicionScroll) {
          // Scrolleando hacia abajo
          barraNavegacion.classList.add("barra-translate");
        } else if (posicionActualScroll < ultimaPosicionScroll) {
          // Scrolleando hacia arriba
          barraNavegacion.classList.remove("barra-translate");
        }

        // Actualiza la última posición de scroll
        ultimaPosicionScroll = posicionActualScroll;
      } else {
        barraNavegacion.classList.remove("barra-translate");
      }
    }
  };

  if (paginaPrincipal) {
    window.onscroll = scrollHandleHome;
  } else {
    window.onscroll = scrollHandleNormal;
  }

  //Boton menu hamburguesa
  const btnBurguer = document.querySelector(".menu-icon");
  const menuSmartphone = document.querySelector(".menu-smartphone");
  const btnCerrarMenuSmartphone = document.querySelector(
    ".menu-smartphone .icono-cerrar"
  );
  const toggleMenuSmartphone = () => {
    menuSmartphone.classList.toggle("mostrar-menu");
  };

  btnCerrarMenuSmartphone.onclick = toggleMenuSmartphone;
  btnBurguer.onclick = toggleMenuSmartphone;
});
