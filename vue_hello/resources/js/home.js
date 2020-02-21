import Vue from 'vue'
import App from './components/Home'
import SocialSharing from 'vue-social-sharing'  // ソーシャルシェアボタンを簡単に導入できる

Vue.use(SocialSharing)

new Vue({
    el: 'app',
    components: {
        app: App
    }
})
