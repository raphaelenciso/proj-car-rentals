const hamburger = document.getElementById("hamburger");
const navItems = document.getElementById("navItems");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("is-active");
  navItems.classList.toggle("is-active");
});
