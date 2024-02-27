export default (function () {
  $(".email-side-toggle").on("click", (e) => {
    $(".email-app").toggleClass("side-active");
    e.preventDefault();
  });

  $(".email-list-item, .back-to-mailbox").on("click", (e) => {
    $(".email-content").toggleClass("open");
    e.preventDefault();
  });
})();

window.addEventListener("load", function load() {
  const loader = document.getElementById("loader");
  setTimeout(function () {
    loader.classList.add("fadeOut");
  }, 300);
});
