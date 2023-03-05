// https://tailwindcss.com/docs/configuration
module.exports = {
  content: ['./index.php', './app/**/*.php', './resources/**/*.{php,vue,js}'],
  theme: {
    fontFamily : {
      'another-hand' : ['Just Another Hand', 'cursive'],
      'jeju-gothic' : ['JejuGothic', 'sans-serif'],
    },
    borderWidth: {
      '15': '15px',
    },
    extend: {
      colors: {}, // Extend Tailwind's default colors
      spacing: {
        'header-height': 'var(--header-height)',
      },
      maxWidth: {
        'container' : 'var(--container-width)',
      }
    },
  },
  plugins: [],
};
