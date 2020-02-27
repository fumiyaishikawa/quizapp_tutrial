import Vue from 'vue'
import router from './router.js'
import SocialSharing from 'vue-social-sharing'
import axios from 'axios'

Vue.prototype.$http = axios;    // Axiosをグローバルに使えるようにする設定

Vue.use(SocialSharing);

new Vue({
    router: router, // routerにrouter.jsを設定する
}).$mount('#app')   // ターゲットを設定する。elでも同じ
