import defaultTheme from 'tailwindcss/defaultTheme';
import preset from './vendor/filament/support/tailwind.config.preset';


/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'class',
    mode: 'jit',
    // presets: [preset],
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
        "./node_modules/flowbite/**/*.js",
        './app/Filament/**/*.php',
        './resources/views/filament/**/*.blade.php',
        './vendor/filament/**/*.blade.php',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
        },
        colors: {
            'primary' : '#485696',
            'secondary' : '#e7e7e7',
            'app-orange': '#a167a5',
            'app-orange-2': '#4a306d',
            'appColor': '#e8d7f1',
            'app-orange-3': '#f9c784',
        }
    },
    plugins: [
        require('flowbite/plugin')
    ],
};
