import Vue from 'vue'
import Router from 'vue-router'

// コンポーネント
import Home from './components/page/Home'
import Quiz from './components/page/Quiz'

Vue.use(Router)

export default new Router({
    mode: 'history',    // SPAのURLにはhistoryモード(#ハッシュが付かないタイプを使います)
    routes: [
        {
            path: '/',
            name: 'home',
            component: Home
        },
        {
            path: '/quiz',
            name: 'quiz',
            component: Quiz
        }
    ]
})
