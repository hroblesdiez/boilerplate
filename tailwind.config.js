/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    './*.html',
    './*.php',
    './src/*.js',
    './inc/*.php',
    '../generatepress/*.php',
    './templates/*.php',
    './templates/partials/*.php'
  ],
  theme: {
    screens: {
      'sm': '586px',
      'md': '768px',
      'lg': '992px',
      'xl': '1440px',
    },
    colors: {
      'primary': '#2caee2',
      'primary2': '#252422',
      'secondary': '#F7F5F6',
      'paragraph': '#666',
      'heading': '#252422',
      'background': '#F4F6F9',
      'white': '#fff',
      'black': '#000',
      'background2':  '#0f1113',
      'transparent': 'transparent',
      'current': 'currentColor',


    },
    fontFamily: {
      'roboto': ['Roboto', 'sans-serif'],
      'montserrat': ['Montserrat', 'sans-serif'],

    },
    fontSize: {
      'sm': ['14px', '24px'],
      'base': ['16px', '26px'],
      'lg': ['20px', '28px'],
      'xl': ['24px', '30px'],
      '2xl': ['28px', '32px'],
      '3xl': ['32px', '34px'],
      '4xl': ['36px', '36px'],
      '5xl': ['42px', '42px'],
      '6xl': ['48px', '48px'],
    },
    important: true,
    extend: {
      boxShadow: {
        'card': '0 5px 20px 2px rgba(0, 0, 0, 0.15)',
      },

    },
  },
  plugins: [],
}
