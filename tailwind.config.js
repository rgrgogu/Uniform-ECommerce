/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./pages/**/*.{html,js,php}",
    "**/*.{html,js,php}"
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
