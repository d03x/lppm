/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    container : {
      center:true,
    },
    extend: {
      colors : {
        primary : '#134369',
        secondary : "#d9d9d9",
        warna1 : "#246c9c",
        blue1 : '#a9cee1',
        menuHover:'#041c3b'
      }
    },
  },
  plugins: [],
}