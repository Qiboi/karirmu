/** @type {import('tailwindcss').Config} */
module.exports = {
  darkMode: ['class', '[dark-mode="dark"]'],
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {},
    colors: {
      'midnight': '#00425a',
    },
  },
  plugins: [
    require('@tailwindcss/forms'),
    require('flowbite/plugin'),
  ],
}
