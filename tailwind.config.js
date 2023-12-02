/** @type {import('tailwindcss').Config} */
module.exports = {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        extend: {
            colors: {
                primary: "#583DEA",
                secondary: "#F6F6F6",
                accent: "#f04939",
                light: "#FFFFFF",
                dark: "#11141D",
            },
        },
    },
    plugins: [],
};
