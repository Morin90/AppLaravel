let mix = require('laravel-mix');

// mix.js('resources/js/app.js', 'public/js')
//     .postCss('resources/css/app.css', 'public/css', [

// ])
mix.js('src/app.js', 'dist').setPublicPath('dist');
