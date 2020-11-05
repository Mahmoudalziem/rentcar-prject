"use strict";

var mix = require('laravel-mix');

mix.config.fileLoaderDirs.fonts = 'assets/fonts';
/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js("resources/js/app.js", "public/js").sass("resources/sass/app.scss", "public/css") //// home Assets
.js("resources/js/pages/home.js", "public/js/pages").sass("resources/sass/pages/home.scss", "public/css/pages") // //// About Assets
.js("resources/js/pages/about.js", "public/js/pages").sass("resources/sass/pages/about.scss", "public/css/pages") //// Contact Assets
.js("resources/js/pages/contact.js", "public/js/pages").sass("resources/sass/pages/contact.scss", "public/css/pages") //// Login Assets
.js("resources/js/pages/login.js", "public/js/pages").sass("resources/sass/pages/login.scss", "public/css/pages") //// ForgetPassword Assets
.js("resources/js/pages/forget.js", "public/js/pages").sass("resources/sass/pages/forget.scss", "public/css/pages") /////reset
.js("resources/js/pages/reset.js", "public/js/pages").sass("resources/sass/pages/reset.scss", "public/css/pages") //// register Assets
.js("resources/js/pages/register.js", "public/js/pages").sass("resources/sass/pages/register.scss", "public/css/pages") //// services Assets
.js("resources/js/pages/services.js", "public/js/pages").sass("resources/sass/pages/services.scss", "public/css/pages") //// services Show Assets
.js("resources/js/pages/show.js", "public/js/pages").sass("resources/sass/pages/show.scss", "public/css/pages") //// Add car
.js("resources/js/cars/addcar.js", "public/js/cars").sass("resources/sass/cars/addcar.scss", "public/css/cars") ///// View Seller
.js("resources/js/seller/viewseller.js", "public/js/seller").sass("resources/sass/seller/viewseller.scss", "public/css/seller") ///// Add Seller
.js("resources/js/seller/addseller.js", "public/js/seller").sass("resources/sass/seller/addseller.scss", "public/css/seller") //// Renter Assets
.js("resources/js/renter/renter.js", "public/js/renter").sass("resources/sass/renter/renter.scss", "public/css/renter") //// Admin Assets
.js("resources/js/admin/dashboard.js", "public/js/admin").sass("resources/sass/admin/dashboard.scss", "public/css/admin") ///// Admin Settings
.js("resources/js/admin/settings.js", "public/js/admin").sass("resources/sass/admin/settings.scss", "public/css/admin");