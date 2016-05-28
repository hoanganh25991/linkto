<?php
/**
 * access css, js in public through EXLIXIR
 */
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="{{elixir("css/app.css")}}">
</head>
<body>

</body>
</html>
<?php
/**
 * gulpfile.js
 */
var elixir = require('laravel-elixir');

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

elixir(function(mix) {
    mix.sass('app.scss');
});

/**
 * note:
 * app.scss where we put code to compile sass into css
 * elixir can concat, minify,... on css, js
 */
