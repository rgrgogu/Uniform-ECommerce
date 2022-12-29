/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./pages/**/*.{html,js}",
    "**/*.{html,js}"
  ],
  theme: {
    screens: {
      sm: '320px',
      md: '640px',
      lg: '1020px',
      xl: '1280px',
    },
  },
  plugins: [],
}
