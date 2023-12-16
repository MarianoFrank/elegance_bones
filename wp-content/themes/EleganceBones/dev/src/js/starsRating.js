document.addEventListener("DOMContentLoaded", function () {
  const contenedoresRating = document.querySelectorAll(".star-rating");

  contenedoresRating.forEach((contenedorRating) => {
    const rating = parseFloat(
      contenedorRating.querySelector(".rating").textContent
    );

    // Limpiar el contenido actual
    contenedorRating.innerHTML = "";

    // Agregar estrellas basadas en el rating
    for (let i = 1; i <= 5; i++) {
      const starIcon = document.createElement("i");

      if (i <= rating) {
        starIcon.classList.add("fa-solid");
      } else if (i - 0.5 <= rating) {
        starIcon.classList.add("fa-star-half-stroke");
      } else {
        starIcon.classList.add("fa-regular");
      }

      starIcon.classList.add("fa-star");
      contenedorRating.appendChild(starIcon);
    }
  });

  //Estrellas del formulario

  const inputHiddenRating = document.querySelector("[name=rating]");
  let estrellaClick = false;

  const rellenarEstrellasHastaSeleccionada = (valorEstrella) => {
    for (let i = 1; i <= valorEstrella; i++) {
      const estrella_i = document.querySelector(
        `.stars-selector i[data-value="${i}"]`
      );
      estrella_i.classList.add("fa-solid");
    }
  };

  const limpiarEstrellasTodas = () => {
    estrellas.forEach((estrella) => {
      estrella.classList.remove("fa-solid");
    });
  };

  const handleMouseEnter = (e) => {
    limpiarEstrellasTodas();
    const valorEstrella = e.target.dataset.value;
    rellenarEstrellasHastaSeleccionada(valorEstrella);
  };

  const handleMouseLeave = () => {
    limpiarEstrellasTodas();
    const valorEstrella = inputHiddenRating.value;
    if (valorEstrella) {
      rellenarEstrellasHastaSeleccionada(valorEstrella);
    }
  };

  const handleClick = (e) => {
    estrellaClick = true;
    const valorEstrella = e.target.dataset.value;
    inputHiddenRating.value = valorEstrella;
  };

  const estrellas = document.querySelectorAll(".stars-selector i");
  const estrellasContainer = document.querySelector(".stars-selector");

  if (estrellasContainer) {
    estrellasContainer.addEventListener("mouseleave", handleMouseLeave);
  }

  estrellas.forEach((estrella) => {
    estrella.addEventListener("mouseenter", handleMouseEnter);
    estrella.addEventListener("click", handleClick);
  });
});
