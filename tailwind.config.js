const defaultTheme = require('tailwindcss/defaultTheme');
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
    fontFamily: {
      sans: ['Neue', ...defaultTheme.fontFamily.sans],
    },
    container: {
      screens: {
         sm: "100%",
         md: "100%",
         lg: "1024px",
         xl: "1200px"
      }
    }
  },
  plugins: [],
}
