import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import plugin from 'preline/plugin';

/** @type {import('tailwindcss').Config} */
export default {
  content: [
      "./resources/**/*.blade.php",
      "./resources/**/*.js",
      "./resources/**/*.vue",
      "node_modules/preline/dist/*.js",
  ],
  theme: {
    extend: {
        fontFamily: {
            sans: ["Roboto", ...defaultTheme.fontFamily.sans],
        },
        boxShadow: {
            "radio-mark": "0 0 0 4px white inset",
        },
        colors: {
            primary: "#EA580C",
            "hover-primary": "#CB4B09",
            "primary-user": "#0157C8",
            "dark-blue": "#23374D",
        },
    },
  },
  plugins: [
      forms,
      plugin
  ],
};

