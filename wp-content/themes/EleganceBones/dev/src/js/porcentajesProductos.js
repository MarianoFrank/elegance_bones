document.addEventListener("DOMContentLoaded", function () {
  const productsContainers = document.querySelectorAll("ul.products");

  const obtenerFlotante = (numString) => {
    // Eliminar caracteres no numéricos y todos los puntos excepto el último
    var soloNumeros = numString
      .replace(/[^\d,]/g, "")
      .replace(/\.(?=\d*\.)/g, "");

    console.log(soloNumeros);

    // Reemplazar la coma por el punto para obtener un número flotante válido
    var soloNumerosConPunto = soloNumeros.replace(",", ".");

    // Parsear la cadena como un número flotante
    return parseFloat(soloNumerosConPunto);
  };

  productsContainers.forEach((productsContainer) => {
    const products = productsContainer.querySelectorAll("li.product");

    products.forEach((product) => {
      const onSaleMensaje = product.querySelector(".onsale");

      if (!onSaleMensaje) {
        const priceElement = product.querySelector(".price");

        const insElement = priceElement.querySelector("ins");
        const delElement = priceElement.querySelector("del");

        const precioOferta = insElement
          ? obtenerFlotante(insElement.textContent)
          : null;
        const precioNormal = delElement
          ? obtenerFlotante(delElement.textContent)
          : null;

        if (precioOferta && precioNormal) {
          const porcentaje = (precioOferta / precioNormal) * 100;
          console.log(porcentaje);
          const newOnSaleElement = document.createElement("span");

          // Agregar la clase "onsale" al nuevo elemento
          newOnSaleElement.className = "onsale";

          // Establecer el contenido del elemento
          newOnSaleElement.textContent = `¡ ${porcentaje} OFF !`;

          // Agregar el elemento al cuerpo del documento (puedes cambiar esto según donde quieras agregarlo)
          const productoEnlace = product.querySelector("a");
          const tituloProducto = product.querySelector(
            ".woocommerce-loop-product__title"
          );

          productoEnlace.insertBefore(newOnSaleElement, tituloProducto);
        }
      }
    });
  });
});
