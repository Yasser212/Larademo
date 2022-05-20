module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  darkMode: 'class',
  theme: {
    screens: {
      xs: '480px',
      sm: '640px',
      md: '768px',
      lg: '976px',
      xl: '1440px',
    },
    extend: 
      {colors: {
      brightRed: 'hsl(12, 88%, 59%)',
      brightRedLight: 'hsl(12, 88%, 69%)',
      brightRedSupLight: 'hsl(12, 88%, 95%)',
      darkBlue: 'hsl(228, 39%, 23%)',
      darkGrayishBlue: 'hsl(227, 12%, 61%)',
      veryDarkBlue: 'hsl(233, 12%, 13%)',
      veryPaleRed: 'hsl(13, 100%, 96%)',
      veryLightGray: 'hsl(0, 0%, 98%)',
      almond: "#ffebcd",
      dark_blue: "#03045E",
      lite_blue: "#00B4D8",
      sky_blue: "#90E0EF",
      lite_sky_blue: "CAF0F8",
      test_1: "#15133C",
      test_2: "#73777B",
      test_3: "#FF8D29",
      test_4: "#F1EEE9",
      test_5: "#FF4949",
      body_dark: "#8b8c8e",
      body_bright: "#e8eaf0",
      header_dark: "#141850",
      header_bright: "#303179",
      button_normal: "#ed7966",
      button_hover: "#f5cac2",
      bright_side: "#fae5df",

  }, transitionTimingFunction: {
    'in-expo': 'cubic-bezier(0, 0.110, 0.35, 2)'
  },    
  },
  },
  plugins: [require("daisyui"),
  require('@tailwindcss/line-clamp'),]
}