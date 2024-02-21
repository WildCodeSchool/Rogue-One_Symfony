document.addEventListener("DOMContentLoaded", function () {
  const links = document.querySelectorAll("[data-page]");
  const pages = document.querySelectorAll(".page");

  links.forEach((link) => {
    link.addEventListener("click", function (ev) {
      ev.preventDefault();
      const targetPageId = this.getAttribute("data-page");
      pages.forEach((page) => {
        if (page.id === targetPageId.substring(1)) {
          page.classList.add("active");
        } else {
          page.classList.remove("active");
        }
      });
    });
  });
});
