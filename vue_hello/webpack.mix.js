let mix = require('laravel-mix');

// resources/js/app.jsをpublic/jsにコンパイルする設定
mix.js('resources/js/home.js', 'public/js')
    // node-sassを使って、sassをcssにコンパイルする
    .sass('resources/sass/app.scss', 'public/css', {
        implementation: require('node-sass')
    });

// public/**/*.*配下にある全てのファイルが変更された時に自動リロードする
// proxyで監視するサーバーを設定する。今回はPHPビルドインサーバーを設定している。
mix.browserSync({
    files: [
        "public/**/*.*"
    ],
    proxy: "http://localhost:8000"
});
