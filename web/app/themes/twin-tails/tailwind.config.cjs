// https://tailwindcss.com/docs/configuration
module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    fontFamily : {
      'another-hand' : ['Just Another Hand', 'cursive'],
    },
    extend: {
      colors: {}, // Extend Tailwind's default colors
      spacing: {
        'header-height': 'var(--header-height)',
      },
    },
  },
  plugins: [],
};
