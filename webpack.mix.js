const mix = require("laravel-mix");
const path = require("path");
const tailwindcss = require("tailwindcss");

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

// App
mix.ts("resources/app/js/app.ts", "public/js/app").vue();
mix.postCss("resources/app/css/app.css", "public/css/app", [
    tailwindcss("./app.tailwind.config.js"),
]);
mix.alias({
    "@app": path.join(__dirname, "resources/app/js"),
});

// Admin-App
mix.ts("resources/admin/js/app.ts", "public/js/admin").vue();
mix.postCss("resources/admin/css/app.css", "public/css/admin", [
    tailwindcss("./admin.tailwind.config.js"),
]);
mix.alias({
    "@admin": path.join(__dirname, "resources/admin/js"),
});
mix.browserSync({
    proxy: "wireframes.test",
});
