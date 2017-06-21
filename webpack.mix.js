let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.copy('resources/assets/assets/global/plugins/font-awesome/fonts', 'public/fonts');
mix.copy('resources/assets/assets/global/plugins/simple-line-icons/fonts', 'public/css/fonts');

mix.styles([

    // BEGIN GLOBAL MANDATORY STYLES
    'resources/assets/assets/global/plugins/font-awesome/css/font-awesome.min.css',
    'resources/assets/assets/global/plugins/simple-line-icons/simple-line-icons.min.css',
    'resources/assets/assets/global/plugins/bootstrap/css/bootstrap.min.css',
    'resources/assets/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css',
    // END GLOBAL MANDATORY STYLES
    // BEGIN PAGE LEVEL PLUGINS
    'resources/assets/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css',
    'resources/assets/assets/global/plugins/morris/morris.css',
    'resources/assets/assets/global/plugins/fullcalendar/fullcalendar.min.css',
    'resources/assets/assets/global/plugins/jqvmap/jqvmap/jqvmap.css',
    // END PAGE LEVEL PLUGINS
    // BEGIN THEME GLOBAL STYLES
    'resources/assets/assets/global/css/components.min.css',
    'resources/assets/assets/global/css/plugins.min.css',
    // END THEME GLOBAL STYLES
    // BEGIN THEME LAYOUT STYLES
    'resources/assets/assets/layouts/layout3/css/layout.min.css',
    'resources/assets/assets/layouts/layout3/css/themes/default.min.css',
    'resources/assets/assets/layouts/layout3/css/custom.css',
    // END THEME LAYOUT STYLES
    // BEGIN PAGE PRICING STYLES
    'resources/assets/assets/pages/css/pricing.min.css',
    // END PAGE PRICING STYLES
    // BEGIN PAGE ERROR STYLES
    'resources/assets/assets/pages/css/error.min.css',
    // END PAGE ERROR STYLES
    // BEGIN PAGE WIZARD PLUGINS
    'resources/assets/assets/global/plugins/select2/css/select2.min.css',
    'resources/assets/assets/global/plugins/select2/css/select2-bootstrap.min.css',
    // END PAGE WIZARD PLUGINS
    // BEGIN PAGE SWEETALERT PLUGINS
    'resources/assets/assets/global/plugins/bootstrap-sweetalert/sweetalert.css',
    // END PAGE SWEETALERT PLUGINS
    // BEGIN PAGE CALENDAR PLUGINS
    'resources/assets/assets/global/plugins/fullcalendar/fullcalendar.min.css',
    // END PAGE CALENDAR PLUGINS
    // BEGIN PAGE TOUCHSPIN PLUGINS
    'resources/assets/assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.css'
    // END PAGE TOUCHSPIN PLUGINS


], 'public/css/libs.css');

mix.scripts([

    // BEGIN CORE PLUGINS
    'resources/assets/assets/global/plugins/jquery.min.js',
    'resources/assets/assets/global/plugins/bootstrap/js/bootstrap.min.js',
    'resources/assets/assets/global/plugins/js.cookie.min.js',
    'resources/assets/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js',
    'resources/assets/assets/global/plugins/jquery.blockui.min.js',
    'resources/assets/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js',
    // END CORE PLUGINS
    // BEGIN PAGE LEVEL PLUGINS
    'resources/assets/assets/global/plugins/moment.min.js',
    'resources/assets/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js',
    'resources/assets/assets/global/plugins/morris/morris.min.js',
    'resources/assets/assets/global/plugins/morris/raphael-min.js',
    'resources/assets/assets/global/plugins/counterup/jquery.waypoints.min.js',
    'resources/assets/assets/global/plugins/counterup/jquery.counterup.min.js',
    'resources/assets/assets/global/plugins/fullcalendar/fullcalendar.min.js',
    'resources/assets/assets/global/plugins/flot/jquery.flot.min.js',
    'resources/assets/assets/global/plugins/flot/jquery.flot.resize.min.js',
    'resources/assets/assets/global/plugins/flot/jquery.flot.categories.min.js',
    'resources/assets/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js',
    'resources/assets/assets/global/plugins/jquery.sparkline.min.js',
    'resources/assets/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js',
    'resources/assets/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js',
    'resources/assets/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js',
    'resources/assets/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js',
    'resources/assets/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js',
    'resources/assets/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js',
    'resources/assets/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js',
    // END PAGE LEVEL PLUGINS
    // BEGIN THEME GLOBAL SCRIPTS
    'resources/assets/assets/global/scripts/app.min.js',
    // END THEME GLOBAL SCRIPTS
    // BEGIN PAGE LEVEL SCRIPTS
    'resources/assets/assets/pages/scripts/dashboard.min.js',
    // END PAGE LEVEL SCRIPTS
    // BEGIN THEME LAYOUT SCRIPTS
    'resources/assets/assets/layouts/layout3/scripts/layout.min.js',
    'resources/assets/assets/layouts/layout3/scripts/demo.min.js',
    'resources/assets/assets/layouts/global/scripts/quick-sidebar.min.js',
    'resources/assets/assets/layouts/global/scripts/quick-nav.min.js',
    // END THEME LAYOUT SCRIPTS
    // BEGIN PAGE SWEETALERT PLUGINS
    'resources/assets/assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js',
    'resources/assets/assets/pages/scripts/ui-sweetalert.min.js',
    // END PAGE SWEETALERT PLUGINS
    // BEGIN PAGE CALENDAR PLUGINS
    'resources/assets/assets/global/plugins/jquery-ui/jquery-ui.min.js',
    'resources/assets/assets/global/plugins/fullcalendar/lang/zh-tw.js',
    // END PAGE CALENDAR PLUGINS
    // BEGIN PAGE TOUCHSPIN PLUGINS
    'resources/assets/assets/global/plugins/fuelux/js/spinner.min.js',
    'resources/assets/assets/global/plugins/bootstrap-touchspin/bootstrap.touchspin.js',
    'resources/assets/assets/pages/scripts/components-bootstrap-touchspin.min.js',
    // END PAGE TOUCHSPIN PLUGINS
    // BEGIN PAGE SWITCH PLUGINS
    'resources/assets/assets/pages/scripts/components-bootstrap-switch.min.js',
    // END PAGE SWITCH PLUGINS
    // BEGIN PAGE FORM-INPUT-MASK PLUGINS
    'resources/assets/assets/global/plugins/jquery-inputmask/jquery.inputmask.bundle.min.js',
    'resources/assets/assets/global/plugins/jquery.input-ip-address-control-1.0.min.js',
    'resources/assets/assets/pages/scripts/form-input-mask.js'
    // END PAGE FORM-INPUT-MASK PLUGINS

], './public/js/libs.js');

mix.scripts([

    'resources/assets/assets/global/plugins/respond.min.js',
    'resources/assets/assets/global/plugins/excanvas.min.js',
    'resources/assets/assets/global/plugins/ie8.fix.min.js'

], './public/js/ie9.js');
