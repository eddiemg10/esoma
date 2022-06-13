const defaultTheme = require("tailwindcss/defaultTheme");

module.exports = {
    content: [
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
        "./storage/framework/views/*.php",
        "./resources/views/**/*.blade.php",
    ],

    theme: {
        extend: {
            colors: {
                "blue-rich": "#0597F2",
                'esomagreen': '#F2A81D',
                'esomablue': '#014773',
                'esomawhite': 'rgb(255 255 255)',
                'esomagrey': '#757575',
                'esomaoffwhite': '#F8F8F8',
                'esomalightblue': '#0597F2'
            },
            fontFamily: {
                roboto: "Roboto",
                'nunito': ['nunito', 'sans-serif']
            },
            screens: {
                xmd: "860px",

            },
        },
    },

    plugins: [require("@tailwindcss/forms")],
};
