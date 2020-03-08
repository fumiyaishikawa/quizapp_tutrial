import Vue from 'vue'
import router from './router.js'
import SocialSharing from 'vue-social-sharing'
import axios from 'axios'
// jQueryで使うグローバル変数$とjQueryを設定
import jQuery from "jquery";
import MainPage from './components/page/MainPage'

window.$ = window.jQuery = jQuery;
// require('bootstrap')でbootstrapに関するJavaScriptファイルを読み込み、モーダルを開けるようする
require('bootstrap');

Vue.prototype.$http = axios;    // Axiosをグローバルに使えるようにする設定

Vue.use(SocialSharing);

new Vue({
    router: router, // routerにrouter.jsを設定する
    components: {
        app: MainPage
    }
}).$mount('#app')   // ターゲットを設定する。elでも同じ
