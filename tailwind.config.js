/** @type {import('tailwindcss').Config} */
module.exports = {
  important: true,
  content: ["./**/*.{html,php,js,scss}"],
  theme: {
    extend: {
      screens: {
        'sm': '640px',
        'md': '768px',
        'lg': '1024px',
        'xl': '1280px',
        '2xl': '1536px'
      }
    },
  },
  plugins: [],
}

