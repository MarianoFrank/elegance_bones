import Swiper from "swiper";
import { Navigation, Pagination, Autoplay } from "swiper/modules";
import "swiper/swiper-bundle.css";

import "swiper/css/navigation";
import "swiper/css/pagination";

document.addEventListener("DOMContentLoaded", function () {
  let contadorSwipers = 0;

  const agregarPaginacionAndButtons = (swiperContainer) => {
    const paginationElement = document.createElement("div");
    paginationElement.className = "swiper-pagination";

    const prevButtonElement = document.createElement("div");
    prevButtonElement.className = "swiper-button-prev";

    const nextButtonElement = document.createElement("div");
    nextButtonElement.className = "swiper-button-next";

    swiperContainer.appendChild(paginationElement);
    swiperContainer.appendChild(prevButtonElement);
    swiperContainer.appendChild(nextButtonElement);
  };

  const integrarClasesSwiper = () => {
    const contenedoresPricipales = document.querySelectorAll(
      "section div.woocommerce"
    );

    contenedoresPricipales.forEach((contenedorPricipal) => {
      contenedorPricipal.classList.add(`swiper-container-${contadorSwipers}`); //container
      contadorSwipers++;

      agregarPaginacionAndButtons(contenedorPricipal);

      const productsContainers =
        contenedorPricipal.querySelectorAll("ul.products"); //wrapper

      productsContainers.forEach((productsContainer) => {
        productsContainer.classList.add("products", "swiper-wrapper");

        const productos = productsContainer.querySelectorAll("li.product"); //slide

        productos.forEach((producto) => {
          producto.classList.add("product", "swiper-slide");
        });
      });
    });
  };

  //Agregamos las clases de swiper al los shortcodes de woocommerce
  integrarClasesSwiper();

  const crearSwipers = () => {
    for (let i = 0; i < contadorSwipers; i++) {
      new Swiper(`.swiper-container-${i}`, argSwiper);
    }
  };

  const argSwiper = {
    slidesPerView: 1,
    spaceBetween: 20,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    modules: [Navigation, Pagination, Autoplay],
    breakpoints: {
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
      1366: {
        slidesPerView: 4,
      },
    },
    autoplay: {
      delay: 3000,
      pauseOnMouseEnter: true,
    },
  };

  crearSwipers();
});
