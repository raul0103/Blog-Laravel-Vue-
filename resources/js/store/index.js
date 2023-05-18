import axios from 'axios'
import {
    createStore
} from 'vuex'

export default createStore({
    state() {
        return {
            article: {},
            like_it: true,
            article_id: null
        }
    },
    actions: {
        getArticleData({
            commit,
            state
        }) {
            axios.get('/api/v1/article-json', {
                params: {
                    id: state.article_id
                }
            }).then(response => {
                commit('setArticle', response.data.data)
            })
        },
        putArticleViews({
            commit,
            state
        }) {
            setTimeout(() => {
                axios.put('/api/v1/article-increment-views', {
                    id: state.article_id
                }).then(response => {
                    commit('setArticle', response.data.data)
                })
            }, 5000)
        },
        putArticleLikes({
            commit,
            state
        }) {
            axios.put('/api/v1/article-increment-likes', {
                id: state.article_id,
                like_it: state.like_it
            }).then(response => {
                commit('setArticle', response.data.data)
                commit('setLikeIt')
            })

        }
    },
    getters: {
        getArticle(state) {
            return state.article
        },
        getLikeIt(state) {
            return state.like_it
        }
    },
    mutations: {
        setArticle(state, payload) {
            return state.article = payload
        },
        setArticleId(state, payload) {
            return state.article_id = payload
        },
        setLikeIt(state) {
            return state.like_it = !state.like_it
        }
    }
})
