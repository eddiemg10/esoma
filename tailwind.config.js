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
            },
            fontFamily: {
                roboto: "Roboto",
            },
            screens: {
                xmd: "860px",
            },
        },
    },
    plugins: [],
};
