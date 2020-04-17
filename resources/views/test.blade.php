@extends('layouts.app')

@section('content')

    <x-ace-editor-scripts></x-ace-editor-scripts>

    <div class="container mx-auto my-16">

            <div 
                id="ace-editor" 
                class="block w-full my-2 placeholder-gray-600 bg-gray-200 resize-y form-textarea" 
                data-ace-lang="json"
                data-ace-min-lines="2"
                data-ace-max-lines="100"
                >{
    "private": true,
    "scripts": {
        "dev": "npm run development",
        "development": "cross-env NODE_ENV=development node_modules/webpack/bin/webpack.js --progress --hide-modules --config=node_modules/laravel-mix/setup/webpack.config.js",
        "watch": "npm run development -- --watch",
        "watch-poll": "npm run watch -- --watch-poll",
        "hot": "cross-env NODE_ENV=development node_modules/webpack-dev-server/bin/webpack-dev-server.js --inline --hot --config=node_modules/laravel-mix/setup/webpack.config.js",
        "prod": "npm run production",
        "production": "cross-env NODE_ENV=production node_modules/webpack/bin/webpack.js --no-progress --hide-modules --config=node_modules/laravel-mix/setup/webpack.config.js"
    },
    "devDependencies": {
        "@fullhuman/postcss-purgecss": "^2.1.2",
        "@tailwindcss/custom-forms": "^0.2.1",
        "axios": "^0.19",
        "bootstrap": "^4.0.0",
        "cross-env": "^5.1",
        "jquery": "^3.2",
        "laravel-mix": "^4.0.7",
        "laravel-mix-purgecss": "^5.0.0-rc.1",
        "lodash": "^4.17.13",
        "popper.js": "^1.12",
        "resolve-url-loader": "^2.3.1",
        "sass": "^1.20.1",
        "sass-loader": "7.*",
        "tailwindcss-plugins": "^0.3.0",
        "vue": "^2.5.17",
        "vue-template-compiler": "^2.6.10"
    },
    "dependencies": {
        "@tailwindcss/ui": "^0.1.3",
        "alpinejs": "^1.2.0",
        "codemirror": "^5.50.2",
        "tailwindcss": "^1.1.4",
        "turbolinks": "^5.2.0"
    }
}</div>
            <textarea name="content" id="content" class="hidden"></textarea>
        </div>

    </div>

@endsection
