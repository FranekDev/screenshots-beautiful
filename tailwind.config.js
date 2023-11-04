import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';


/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
        './resources/views/*.blade.php'
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
                krona: ['Krona One', ...defaultTheme.fontFamily.sans],
                inter: ['Inter', ...defaultTheme.fontFamily.sans],
            },
            animation: {
                'slide-in': 'slide-in .05s linear forwards',
                'slide-down': 'slide-down .3s linear forwards',
                'slide-up': 'slide-up .3s linear forwards'
            },
            keyframes: {
                'slide-in': {
                    'from': {'margin-bottom': '12px', 'margin-left': '12px'},
                    'to': {'margin-bottom': '0px', 'margin-left': '0px'}
                },
                'slide-down': {
                    'from': {'margin-top': '-20px'},
                    'to': {'margin-top': '8px'}
                },
                'slide-up': {
                    'from': {'margin-top': '8px'},
                    'to': {'margin-top': '-40px'}
                }
            },
            colors: {},
            backgroundImage: {
                'dots': "url('/public/img/dots.svg')",
            }
        },
    },

    plugins: [forms],
};
