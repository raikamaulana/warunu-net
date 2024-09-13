/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./*.{html,js,php}"],
  theme: {
    extend: {
      fontFamily: {
        chakra: ["Chakra Petch"],
        custom: ["CustomFont", "mono"],
      },
    },
  },
  plugins: [],
};
