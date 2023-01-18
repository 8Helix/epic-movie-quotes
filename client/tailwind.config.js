/** @type {import('tailwindcss').Config} */

module.exports = {
  content: ['./index.html', './src/**/*.{vue,js,ts,jsx,tsx}'],
  theme: {
    extend: {
      backgroundImage: {
        primary:
          'linear-gradient(187.16deg, #181623 0.07%, #191725 51.65%, #0D0B14 98.75%);',
        'primary-dark':
          'linear-gradient(180deg, #11101A 0%, #08080D 70.52%, rgba(0, 0, 0, 0) 100%);',
      },
      colors: {
        cream: '#DDCCAA',
        blood: '#E31221',
        blurred: 'rgba(0, 0, 0, 0.54)',
        secondary: 'rgba(255, 255, 255, 0.05)',
        black: '#11101A',
        'light-black': '#212529',
        'dark-blue': '#222030',
        'gray-blue': '#6C757D',
        'light-blue': '#0D6EFD',
        'gray-400': 'rgba(206, 212, 218, 1)',
      },
    },
  },
  plugins: [],
};
