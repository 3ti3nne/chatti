let d = document;

/**
 * Setting navBar menu and button for mobile navigation.
 */

const mobileMenuButton = d.querySelectorAll(".mobileMenuButton");
const mobileNavTopMenu = d.querySelector("#mobileNavTopMenu");
const sidebarMenu = d.querySelector("#sidebarNav");
const main = d.querySelector("main");

mobileMenuButton.forEach((btn) => {
  btn.addEventListener("click", () => {
    sidebarMenu.classList.toggle("-translate-x-full");
    //Remove multiple classes with toggle method
    ["bg-gray-200", "opacity-70", "inset-0", "z-50"].map((arg) =>
      main.classList.toggle(arg)
    );
    mobileNavTopMenu.classList.toggle("bg-gray-200");
  });
});
