/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./app/views/**/*.templ.php",
    "./node_modules/tw-elements/dist/js/**/*.js",
    "./node_modules/flowbite/**/*.js",
  ],
  theme: {
    extend: {},
  },
  plugins: [require("tw-elements/dist/plugin.js", "flowbite/plugin")],
};
