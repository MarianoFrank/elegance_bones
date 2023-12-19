document.addEventListener("DOMContentLoaded", function () {
  const contenedorFiltros = document.querySelector(".filtros");
  const mostrarFiltros = (e) => {
    contenedorFiltros.classList.add("mostrar");
  };

  const cerrarFiltros = (e) => {
    console.log("cerra");
    contenedorFiltros.classList.remove("mostrar");
  };

  const iconoCerra = document.querySelector(".filtros .icono-cerrar");
  iconoCerra.onclick = cerrarFiltros;

  //Agregar boton de filtros
  const container = document.querySelector(".custom-select-container");

  const btnFiltros = document.createElement("BUTTON");
  btnFiltros.classList.add("btnFiltros");
  btnFiltros.innerHTML = 'Filtros <i class="fa-solid fa-filter"></i>';
  container.insertBefore(btnFiltros, container.firstChild);

  btnFiltros.onclick = mostrarFiltros;

  const mostrarBotones = () => {
    if (window.innerWidth >= 768) {
    } else {
    }
  };
  mostrarBotones();
  window.resize = mostrarBotones;
});
