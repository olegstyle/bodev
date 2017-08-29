const elixir = require('laravel-elixir');

//require('laravel-elixir-vue-2');

require('laravel-elixir-typescript');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass('app.scss');
    var dir = "public/angular";
    mix.copy('node_modules/@angular', dir + '/@angular');
 
    mix.typescript('app.js', dir + '/', '/**/*.ts', {
      "target": "ES5",
      "module": "system",
      "moduleResolution": "node",
      "sourceMap": true,
      "emitDecoratorMetadata": true,
      "experimentalDecorators": true,
      "removeComments": false,
      "noImplicitAny": false,
    });
});
