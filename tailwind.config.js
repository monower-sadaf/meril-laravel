/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'primary': '#1A2C79',
      },
    }
  },
  daisyui: {
    themes: [],
  },
  plugins: [require('daisyui'),],
}