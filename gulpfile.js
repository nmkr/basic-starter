var elixir = require('laravel-elixir');

var options;

options = {
    includePaths: [
        elixir.config.bowerDir + "/bootstrap-sass-official/assets/stylesheets",
        // elixir.config.bowerDir + "/fontawesome/scss"
    ]
};

elixir(function(mix) {
    mix.sass(['app.scss', 'login.scss', 'error.scss'], null, options)
    // mix.sass('pages/**/*.scss')

    .coffee(['**/*'])

    .publish(
        'jquery/dist/jquery.min.js',
        'public/js/vendor/jquery.js'
    )
    .publish(
        'bootstrap-sass-official/assets/javascripts/bootstrap.js',
        'public/js/vendor/bootstrap.js'
    )

    .publish(
        'fontawesome/css/font-awesome.min.css',
        'public/css/vendor/font-awesome.min.css'
    )
    .publish(
        'fontawesome/fonts',
        'public/css/fonts'
    );

    console.log(options.includePaths);
});
