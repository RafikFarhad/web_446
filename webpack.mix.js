let mix = require('laravel-mix');


mix.react('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');


 mix.scripts([
 	"public/dist/bower_components/jquery/dist/jquery.min.js",
 	"public/dist/bower_components/jquery-ui/jquery-ui.min.js",
 	"public/dist/bower_components/bootstrap/dist/js/bootstrap.min.js",
 	/*"public/dist/bower_components/raphael/raphael.min.js",
 	"public/dist/bower_components/morris.js/morris.min.js",
 	"public/dist/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js",
 	"public/dist/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js",
 	"public/dist/plugins/jvectormap/jquery-jvectormap-world-mill-en.js",
 	"public/dist/bower_components/jquery-knob/dist/jquery.knob.min.js",
 	"public/dist/bower_components/moment/min/moment.min.js",
 	"public/dist/bower_components/bootstrap-daterangepicker/daterangepicker.js",
 	"public/dist/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js",
 	"public/dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js",
 	"public/dist/bower_components/jquery-slimscroll/jquery.slimscroll.min.js",
 	"public/dist/bower_components/fastclick/lib/fastclick.js",*/
 	"public/dist/js/adminlte.min.js",
 	"public/dist/js/pages/dashboard.js",
 	"public/dist/js/demo.js",
    //IE8 support of HTML5 elements and media queries
    // "https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js",  
    // "https://oss.maxcdn.com/respond/1.4.2/respond.min.js"       
    ], 'public/js/app.js');

 mix.styles([
 	"public/dist/bower_components/bootstrap/dist/css/bootstrap.min.css",
 	"public/dist/bower_components/font-awesome/css/font-awesome.min.css",
 	"public/dist/bower_components/Ionicons/css/ionicons.min.css",
 	"public/dist/css/AdminLTE.min.css",
 	// "public/dist/css/skins/_all-skins.min.css",
 	"public/dist/css/skins/skin-green.min.css",
 	/*"public/dist/bower_components/morris.js/morris.css",
 	"public/dist/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css",
 	"public/dist/bower_components/bootstrap-daterangepicker/daterangepicker.css",
 	"public/dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css"*/

 	], 'public/css/app.css')
 .copy('public/dist/bower_components/Ionicons/fonts', 'public/fonts')
 .copy('public/dist/bower_components/font-awesome/fonts', 'public/fonts');