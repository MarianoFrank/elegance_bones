// document.addEventListener("DOMContentLoaded", function () {
//   const domain = window.location.hostname;
//   const url = `https://${domain}/tienda/page/`;
//   //Arrancamos de la pagina 2 porque la 1 lo imprime el servidor la primer vez
//   let page = 2;

//   const loadMorebtn = document.querySelector("#loadMoreBtn");

//   console.log("scroll");

//   const loadProducts = () => {
//     console.log("cargando mas");
//     const fullUrl = `${url}${page}`;
//     console.log(fullUrl);
//     fetch(fullUrl)
//       .then((response) => {
//         if (!response.ok) {
//           throw new Error(`Error de red - ${response.status}`);
//         }
//         return response.json();
//       })
//       .then((products) => {
//         console.log(products);
//         page++;
//         console.log(page);
//       })
//       .catch((error) => {
//         console.error("Error al obtener productos:", error);
//       });
//   };

//   loadMorebtn.onclick = loadProducts;
// });
