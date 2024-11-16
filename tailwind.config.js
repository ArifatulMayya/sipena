/** @type {import('tailwindcss').Config} */
export default {
    content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
    ],
    theme: {
      extend: {
        backgroundImage : {
          'custom-image' : 'url("/public/Undip-scaled.jpg")',
        }
      },
    },
    plugins: [],
  }