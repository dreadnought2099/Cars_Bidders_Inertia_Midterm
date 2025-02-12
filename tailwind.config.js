import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                primary: '#A31621',
                secondary: '#FCF7F8',
                dark: '#212121',
                hyperlink: '#155E95',
            },
        },
    },
    plugins: [
        function ({ addComponents }) {
            addComponents ({
                '.hover-underline' : {
                    position: 'relative',
                    display: 'inline-block',
                },

                '.hover-underline::after' : {
                    content: '""',
                    position: 'absolute',
                    left: '50%',
                    bottom: 0,
                    width: '0%',
                    height: '2px',
                    backgroundColor: '#fff',
                    transition: 'all 0.5s ease',
                },

                '.hover-underline:hover::after': {
                    width: '100%',
                    left: '0%',
                },

                '.hover-underline-red' : {
                    position: 'relative',
                    display: 'inline-block',
                },

                '.hover-underline-red::after' : {
                    content: '""',
                    position: 'absolute',
                    left: '0',
                    bottom: 0,
                    width: '0%',
                    height: '2px',
                    backgroundColor: '#A31621',
                    transition: 'all 0.5s ease',
                },

                '.hover-underline-red:hover::after': {
                    width: '100%',
                    left: '0%',
                },
            });
        },
    ],
};
