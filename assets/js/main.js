console.log('wp works');

// service-card-wrapper
document.addEventListener("DOMContentLoaded", function () {
  const serviceCards = document.querySelectorAll(".service-card-wrapper");

  serviceCards.forEach((card) => {
      const title = card.querySelector(".service-title");
      const content = card.querySelector(".service-content");
      const serviceCard = card.querySelector(".service-card");

      // Установим начальное состояние
      serviceCard.classList.add("closed");

      card.addEventListener("click", function () {
          if (content) {
              const isOpen = card.classList.toggle("open");
              card.classList.toggle("closed", !isOpen); // Обновляем класс

              // Переключаем отображение содержимого
              content.style.display = isOpen ? "block" : "none";
          }
      });
  });
});

// document.addEventListener("DOMContentLoaded", function () {
//   const serviceCards = document.querySelectorAll(".service-card-wrapper");

//   serviceCards.forEach((card) => {
//     const title = card.querySelector(".service-card-header");
//     const content = card.querySelector(".service-content");

//     title.addEventListener("click", function (event) {
//       const target = event.target;
//       console.log("click", target);
//       if (content) {
//         content.style.display = content.style.display === "none" ? "block" : "none";
//       }
//     });
//   });
// });