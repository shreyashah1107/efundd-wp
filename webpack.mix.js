const mix = require('laravel-mix');

const themePath = 'assets';
const resources = 'resources';
mix.setPublicPath(`assets/`);

//Scss Compilation
mix
  .sass(`${resources}/sass/app.scss`, `${themePath}/css`)
  .options({ autoprefixer: false, processCssUrls: false })
  .sourceMaps()
  .browserSync({
    proxy: "http://localhost/learning/efundd-wp",
  });

//ja compilation
mix
  .js(`${resources}/js/app.js`, `${themePath}/js`)
  .options({ autoprefixer: false, processCssUrls: false })
  .sourceMaps()
  .browserSync({
    proxy: "http://localhost/learning/efundd-wp",
  });
