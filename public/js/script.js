if (typeof d !== "undefined") {
  let d = document;
}
/**
 * Setting navBar menu and button for mobile navigation.
 */

const mobileMenuButton = d.querySelectorAll(".mobileMenuButton");
const mobileNavTopMenu = d.querySelector("#mobileNavTopMenu");
const sidebarMenu = d.querySelector("#sidebarNav");
const content = d.querySelector("#content");
const main = d.querySelector("main");

mobileMenuButton.forEach((btn) => {
  btn.addEventListener("click", () => {
    sidebarMenu.classList.toggle("-translate-x-full");
    content.classList.toggle("hidden");
    main.classList.toggle("bg-slate");
    mobileNavTopMenu.classList.toggle("bg-slate");
  });
});
