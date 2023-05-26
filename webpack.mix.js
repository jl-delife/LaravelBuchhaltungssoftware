const mix = require("laravel-mix");

mix.js("resources/js/app.js", "public/js").sass(
    "resources/sass/app.scss",
    "public/css"
);

mix.vue({
    version: 3, // Verwende Vue 3
    extractStyles: true, // Extrahiere CSS in separate Dateien
    globalStyles: "resources/sass/app.scss", // Pfade zu globalen SCSS-Dateien
});
