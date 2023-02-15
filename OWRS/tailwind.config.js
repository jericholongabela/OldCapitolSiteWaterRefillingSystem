/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    colors: {
        transparent: 'transparent',
        current: 'currentColor',
        'sky-400': '#38bdf8',
        'sky-500': '#0ea5e9',
        'sky-600': '#0284c7',
        'green-400': '#a3e635',
        'green-500': '#84cc16',
        'green-600': '#65a30d',
        'midnight': '#121063',
        'metal': '#565584',
        'tahiti': '#3ab7bf',
        'silver': '#ecebff',
        'bubble-gum': '#ff77e9',
        'bermuda': '#78dcca',
      },
  },
  plugins: [],
}
