document.addEventListener("DOMContentLoaded", function () {
  const contenedorMiniCarrito = document.querySelector(".mini-cart");
  const mostrarCarrito = (e) => {
    contenedorMiniCarrito.classList.add("mostrar");
  };

  const iconCart = document.querySelector(".icono_carrito");
  iconCart.onclick = mostrarCarrito;

  const cerrarMiniCarrito = (e) => {
    console.log("cerra");
    contenedorMiniCarrito.classList.remove("mostrar");
  };

  const iconoCerra = document.querySelector(".mini-cart .icono-cerrar");
  iconoCerra.onclick = cerrarMiniCarrito;
});
