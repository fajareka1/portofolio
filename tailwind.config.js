/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    "./node_modules/flowbite/**/*.js",
  ],
  darkMode: 'class',
  theme: {
    container:{
      center:true,
      padding: '16px',
    },
    extend: {
      screens : {
        '2xl' : '1320px',
      },
      colors:{
        secondary : '#64748b'
      }
    },
  },
  plugins: [],
}

