import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './node_modules/flyonui/dist/js/*.js',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
    },

    plugins: [
        forms,
        require('flyonui'),
        require('flyonui/plugin')
    ],

    // For flyonui
    flyonui: {
        themes: [{
            getranklord: {
                primary: "#3C50E0",
                secondary: "#f6d860",
                accent: "#37cdbe",
                neutral: "#3d4451",
            }
        }]
    },
};
