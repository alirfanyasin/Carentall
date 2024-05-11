/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
    'node_modules/preline/dist/*.js',
  ],
  theme: {
    // colors : {
    //   "main-color" : "#08323D",
    //   "second=color" : "#D5FD05"
    // },

    extend: {
      
    },
  },
  plugins: [
    require('preline/plugin'),
  ],
}

