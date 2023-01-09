const defaultTheme = require("tailwindcss/defaultTheme");

/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/views/**/*.templ.php",
    "./public/js/*.js",
    "./node_modules/tw-elements/dist/js/**/*.js",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    colors: {
      rose: "#ff9292",
      roseClair: "#FFB4B4",
      roseVeryClair: "#FFDCDC",
      blue: "#14445C",
      blueClair: "#446474",
      blueVeryClair: "#748C94",
      beige: "#FCF4EC",
      gray: "#ACB4B4",
    },
    extend: {
      fontFamily: {
        sans: ["Montserrat", ...defaultTheme.fontFamily.sans],
      },
    },
  },
  plugins: [require("tw-elements/dist/plugin"), require("flowbite/plugin")],
};
