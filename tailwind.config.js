import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';
import typography from '@tailwindcss/typography';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        
        
        './resources/views/**/*.blade.php',
        './resources/views/**/*.js',
        './resources/views/**/*.vue',
    ],

    theme: {
        extend: {},
    },

    plugins: [require("daisyui")],
};
