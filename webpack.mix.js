const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");
require('laravel-mix-purgecss');

mix.js("resources/js/app.js", "public/js");
mix.js("resources/js/ace.js", "public/js");
mix.js("resources/js/ace-yaml.js", "public/js");

mix.sass("resources/sass/app.scss", "public/css").options({
    processCssUrls: false,
    postCss: [tailwindcss("tailwind.config.js")]
});

// mix.purgeCss(); # Remove until https://github.com/spatie/laravel-mix-purgecss/pull/85 get merged