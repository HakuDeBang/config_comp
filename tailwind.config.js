/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./*.html",
    "./node_modules/flowbite/**/*.js"
  ],
  theme: {
    extend: {
      colors: {
        bleuclair: '#00a8dd',
        bleulogo: '#005b7e',
        rougelogo: '#e40114',
        lighttheme: '#f5f7f9',
        darktheme: '#212529',
        valider: '#028923',
      },
      flexBasis: {
        '68': '17rem',
      },
      padding: {
        '26': '6.75rem',
      },
      margin: {
        '15': '3.75rem',
      },
    },
  },
  plugins: [
    require('flowbite/plugin')
  ],
}