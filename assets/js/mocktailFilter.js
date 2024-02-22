// document.addEventListener("DOMContentLoaded", function () {
//   const filterButtons = document.querySelectorAll(".filter-button");
//   const mocktailItems = document.querySelectorAll(".properties-items");
//   const pagination = document.querySelector(".pagination");

//   function filterMocktails(target) {
//     mocktailItems.forEach(function (item) {
//       if (target === "all" || item.getAttribute("data-tag") === target) {
//         item.style.display = "block";
//       } else {
//         item.style.display = "none";
//       }
//     });

//     let displayedMocktails = document.querySelectorAll(
//       '.properties-items[style="display: block;"]'
//     );
//     pagination.style.display =
//       displayedMocktails.length < 10 ? "none" : "block";
//   }

//   filterButtons.forEach(function (button) {
//     button.addEventListener("click", function () {
//       filterButtons.forEach(function (btn) {
//         btn.classList.remove("active-filter");
//       });

//       this.classList.add("active-filter");
//       filterMocktails(this.getAttribute("data-filter"));
//     });
//   });
// });

// document.addEventListener("DOMContentLoaded", function () {
//   let filterButtons = document.querySelectorAll(".filter-button");
//   let mocktailItems = document.querySelectorAll(".properties-items");
//   let pagination = document.querySelector(".pagination");

//   filterButtons.forEach(function (button) {
//     button.addEventListener("click", function () {
//       let target = this.getAttribute("data-filter");

//       mocktailItems.forEach(function (item) {
//         if (target === "all" || item.getAttribute("data-tag") === target) {
//           item.style.display = "block";
//         } else {
//           item.style.display = "none";
//         }
//       });

//       // Check the number of displayed mocktails
//       let displayedMocktails = document.querySelectorAll(
//         '.properties-items[style="display: block;"]'
//       );
//       if (displayedMocktails.length < 10) {
//         pagination.style.display = "none"; // Hide pagination
//       } else {
//         pagination.style.display = "block"; // Show pagination
//       }

//       // Change button color when active
//       filterButtons.forEach(function (button) {
//         button.classList.remove("active-filter");
//       });
//       this.classList.add("active-filter");
//     });
//   });
// });
//
