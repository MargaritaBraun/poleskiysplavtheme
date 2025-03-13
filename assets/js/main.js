import "./styles";

console.log("wp works");

document.addEventListener("DOMContentLoaded", function () {
  const items = document.querySelectorAll(".about-item.points");
  // const items = document.querySelectorAll('.about-item');
  const angleStep = 360 / items.length;
  // console.log('s', items);
  items.forEach((item, index) => {
    const angle = angleStep * index;
    item.style.transform = `rotate(${angle}deg) translate(250px) rotate(-${angle}deg)`;
  });
});

document.addEventListener("DOMContentLoaded", () => {
  const rotatingImage = document.querySelector(".rotating-image");
  const points = document.querySelectorAll(".about-item.points");
  let isSpinning = false;
  let spinCount = 0; // Счетчик вращений
  const maxSpins = 3; // Максимальное количество вращений
  let lastIndex = -1; // Индекс последнего выбранного элемента

  const spin = () => {
    if (isSpinning || spinCount >= maxSpins) return;

    isSpinning = true;
    rotatingImage.style.animation = "spin 0.5s linear infinite";

    const stopTime = 2000; // Общее время вращения (2 секунды)
    const pauseTime = 2000; // Время паузы после остановки

    setTimeout(() => {
      rotatingImage.style.animation = "none";
      isSpinning = false;

      let randomIndex;
      do {
        randomIndex = Math.floor(Math.random() * points.length);
      } while (randomIndex === lastIndex); // Проверка на уникальность индекса

      points.forEach((point) => point.classList.remove("active"));
      points[randomIndex].classList.add("active");

      // Поворачиваем изображение к выбранному пункту
      const angle = (randomIndex / points.length) * 360;
      rotatingImage.style.transform = `rotate(${angle}deg)`;

      // Обновляем индекс последнего выбранного элемента
      lastIndex = randomIndex;

      // Пауза перед следующим вращением
      setTimeout(() => {
        spinCount++; // Увеличиваем счетчик вращений
        spin(); // Запускаем следующее вращение
      }, pauseTime);
    }, stopTime);
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        spin(); // Запускаем анимацию, когда блок в видимости
      } else {
        // Останавливаем анимацию, если блок выходит из видимости
        rotatingImage.style.animation = "none";
        isSpinning = false;
        spinCount = 0; // Сбрасываем счетчик
        lastIndex = -1; // Сбрасываем последний индекс
      }
    });
  });

  // Наблюдаем за блоком
  const targetBlock = document.querySelector(".about-part-content");
  observer.observe(targetBlock);
});

// document.addEventListener('DOMContentLoaded', () => {
//     const rotatingImage = document.querySelector('.rotating-image');
//     const points = document.querySelectorAll('.about-item.points');
//     let isSpinning = false;

//     const spin = () => {
//         if (isSpinning) return;

//         isSpinning = true;
//         rotatingImage.style.animation = 'spin 0.5s linear infinite';

//         const stopTime = 1000; // Время вращения

//         setTimeout(() => {
//             rotatingImage.style.animation = 'none';
//             isSpinning = false;

//             const randomIndex = Math.floor(Math.random() * points.length);
//             points.forEach(point => point.classList.remove('active'));
//             points[randomIndex].classList.add('active');

//             // Поворачиваем изображение к выбранному пункту
//             const angle = (randomIndex / points.length) * 360;
//             rotatingImage.style.transform = `rotate(${angle}deg)`;
//         }, stopTime);
//     };

//     // Автоматически запускаем вращение
//     spin();
// });

// document.addEventListener('DOMContentLoaded', () => {
//     // const spinButton = document.getElementById('spin-button');
//     const rotatingImage = document.querySelector('.rotating-image');
//     const points = document.querySelectorAll('.about-item.points');
//     let isSpinning = false;

//     // spinButton.addEventListener('click', () => {
//         // if (isSpinning) return;

//         isSpinning = true;
//         rotatingImage.style.animation = 'spin 0.5s linear infinite';

//     // const stopTime = Math.random() * 5000 + 3000;
//     // const stopTime = Math.random() * 50 + 1000;
//     const stopTime = 1000;

//         setTimeout(() => {
//             rotatingImage.style.animation = 'none';
//             isSpinning = false;

//             const randomIndex = Math.floor(Math.random() * points.length);
//             points.forEach(point => point.classList.remove('active'));
//             points[randomIndex].classList.add('active');
//         }, stopTime);
//     // });
// });

// document.addEventListener('DOMContentLoaded', () => {
//     const spinButton = document.getElementById('spin-button');
//     const rotatingImage = document.querySelector('.rotating-image');
//     // const points = document.querySelectorAll('.about-item.points');
//     const points = document.querySelectorAll('.about-item');
//     let isSpinning = false;
//     setTimeout(() => {
//         isSpinning = true;
//     }, 500);
//     // spinButton.addEventListener('click', () => {
//     //     console.log('ddd')
//     //     if (isSpinning) return;

//     //     isSpinning = true;
//     //     rotatingImage.style.animation = 'spin 0.5s linear infinite';

//     //     const stopTime = Math.random() * 5000 + 3000;
//     //     setTimeout(() => {
//     //         rotatingImage.style.animation = 'none';
//     //         isSpinning = false;

//     //         const randomIndex = Math.floor(Math.random() * points.length);
//     //         points.forEach(point => point.classList.remove('active'));
//     //         points[randomIndex].classList.add('active');
//     //     }, stopTime);
//     // });
// });
// service-card-wrapper
// document.addEventListener("DOMContentLoaded", function () {
//   const serviceCards = document.querySelectorAll(".service-card-wrapper");

//   serviceCards.forEach((card) => {
//       const title = card.querySelector(".service-title");
//       const content = card.querySelector(".service-content");
//       const serviceCard = card.querySelector(".service-card");

//       // Установим начальное состояние
//       serviceCard.classList.add("closed");

//       card.addEventListener("click", function () {
//           if (content) {
//               const isOpen = card.classList.toggle("open");
//               card.classList.toggle("closed", !isOpen); // Обновляем класс

//               // Переключаем отображение содержимого
//               content.style.display = isOpen ? "block" : "none";
//           }
//       });
//   });
// });

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
