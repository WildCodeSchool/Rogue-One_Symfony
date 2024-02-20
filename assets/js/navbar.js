document.addEventListener("DOMContentLoaded", function () {
  function updateActiveClass() {
    let currentUrl = window.location.pathname.split("/").pop();
    let navLinks = document.querySelectorAll(".main-nav .nav a");
    navLinks.forEach(function (link) {
      let linkHref = link.getAttribute("href").split("/").pop();
      if (linkHref === currentUrl) {
        link.classList.add("active");
        link.classList.add("disabled");
      } else {
        link.classList.remove("active");
        link.classList.remove("disabled");
      }
    });
  }
  updateActiveClass();
  let navLinks = document.querySelectorAll(".main-nav .nav a");
  navLinks.forEach(function (link) {
    link.addEventListener("click", function (event) {
      if (link.classList.contains("disabled")) {
        event.preventDefault();
      }
    });
  });
});
