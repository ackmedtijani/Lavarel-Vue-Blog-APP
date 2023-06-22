/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./public/index.html",
    "./src/**/*.{js,ts,jsx,tsx,vue}",
  ],
  theme: {
    extend: {},
    screens:{
      sm: '488px',
      md: '768px',
      lg: '978px',
      xl: '1448px'
    }
  },

  plugins: [],
}

