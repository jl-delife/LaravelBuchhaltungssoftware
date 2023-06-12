const { defineConfig } = require("vite");
const laravel = require("laravel-vite-plugin");
const vue = require("@vitejs/plugin-vue");

module.exports = defineConfig({
    plugins: [
        laravel(["resources/js/app.js"]),
        vue({
            template: {
                transformAssetUrls: {
                    base: null,
                    includeAbsolute: false,
                },
            },
        }),
    ],
});
