var gulp = require("gulp");
var elixir = require('laravel-elixir');
var phpcs = require('gulp-phpcs');

elixir.extend("lint", function() {

     gulp.task("lint", function() {
     	return gulp.src(['app/**/*.php'])
	        // Validate files using PHP Code Sniffer
	        .pipe(phpcs({
	            bin: 'vendor/bin/phpcs',
	            standard: 'vendor/pragmarx/laravelcs/Standards/Laravel',
	            warningSeverity: 0,
	            colors: true
	        }))
	        // Log all problems that was found
	        .pipe(phpcs.reporter('log'));
     });

     this.registerWatcher("lint", "app/**/*.php");

     return this.queueTask("lint");

 });

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less');
    mix.lint();
});
