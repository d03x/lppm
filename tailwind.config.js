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
        primary : '#E67E22',
        secondary : "#2d3e50",
        warna1 : "#246c9c",
        blue1 : '#a9cee1',
        menuHover:'#041c3b'
      }
    },
  },
  plugins: [],
}