import axios from 'axios'
import {
    createStore
} from 'vuex'

export default createStore({
    state() {
        return {
            article: {}
        }
    },
    actions: {
        getArticleData({
            commit
        }) {
            axios.get('api/article-json').then(response => {
                commit('setArticle', response.data.data)
            })
        }
    },
    getters: {
        getArticle(state) {
            return state.article
        }
    },
    mutations: {
        setArticle(state, payload) {
            return state.article = payload
        }
    }
})
