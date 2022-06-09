module.exports = {
    content: [
        "./storage/framework/views/*.php",
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
        "./vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php",
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
    plugins: [],
};
