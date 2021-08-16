  
const mix = require('laravel-mix');

mix.js('src/js/app.js', 'assets/js')
    .sass('src/sass/app.scss', 'assets/css', [
        //
    ]);

mix.browserSync({
    proxy: "127.0.0.1:8000",
    files: [
        './**/*.php', 
        './**/*.css', 
        './**/*.js'
    ]
});