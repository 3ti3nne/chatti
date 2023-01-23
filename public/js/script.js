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

let mobileMenuOn;

mobileMenuButton.forEach((btn) => {
  btn.addEventListener("click", () => {
    sidebarMenu.classList.toggle("-translate-x-full");
    //Remove multiple classes with toggle method
    content.classList.toggle("hidden");
    main.classList.toggle("bg-slate");
    mobileNavTopMenu.classList.toggle("bg-slate");
    mobileMenuOn = !mobileMenuOn;
  });
});

//click outside the box to close// NOT WORKING ATM

/* console.log(mobileMenuOn);
if (mobileMenuOn === true) {
  console.log("kikoo");
  window.addEventListener("click", (e) => {
    if (e.target == sidebarMenu) {
      sidebarMenu.classList.toggle("-translate-x-full");
      ["bg-gray-400", "opacity-80", "inset-0", "z-50"].map((arg) =>
        content.classList.toggle(arg)
      );
      mobileNavTopMenu.classList.toggle("bg-gray-400");
      mobileMenuOn = !mobileMenuOn;
      console.log(e.target);
    }
  })}; */
