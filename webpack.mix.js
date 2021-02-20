const mix = require("laravel-mix");
const tailwindcss = require("tailwindcss");

// Codemirror
mix.js("resources/js/codemirror.js", "public/js");
mix.css("resources/sass/codemirror.css", "public/css");

// App
mix.js("resources/js/app.js", "public/js");
mix.js("resources/js/livewire-turbolinks.js", "public/js");
mix.sass("resources/sass/app.scss", "public/css").options({
    processCssUrls: false,
    postCss: [tailwindcss("tailwind.config.js")]
});

mix.sourceMaps()

if (mix.inProduction()) {
    mix.version()
}