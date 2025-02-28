const mix = require("laravel-mix");

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/css/app.scss', 'public/css') // Ubah path ini jika app.scss ada di resources/css
   .version();

mix.copyDirectory('resources/client/dist', 'public/client/dist');

let plugins = [
    "bootstrap",
    "flag-icon-css",
    "jqvmap",
    "summernote",
    "owl.carousel",
    "weathericons",
    "jquery",
    "jquery-ui-dist",
    "jquery-sparkline",
    "popper.js",
    "jquery.nicescroll",
    "tooltip.js",
    "moment",
    "summernote",
    "chocolat",
    "chart.js",
    "simpleweather",
    "prismjs",
    "dropzone",
    "bootstrap-social",
    "cleave.js",
    "bootstrap-daterangepicker",
    "bootstrap-colorpicker",
    "bootstrap-timepicker",
    "bootstrap-tagsinput",
    "select2",
    "selectric",
    "codemirror",
    "fullcalendar",
    "datatables",
    "ionicons201",
    "sweetalert",
    "izitoast",
    "weathericons",
    "gmaps",
];

plugins.forEach((plugin) => {
    mix.copy("./node_modules/" + plugin, "public/library/" + plugin);
});
