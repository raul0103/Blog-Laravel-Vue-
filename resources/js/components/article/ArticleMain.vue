<template>
    <h1 class="card-title">{{ article.title }}</h1>
    <div class="card">
        <img
            class="card-img-top"
            style="max-width: 135px"
            :src="article.image"
        />
        <div class="card-body">
            <p class="card-text">{{ article.body }}</p>
            <slot name="tags"></slot>
        </div>
        <div class="card-footer">
            <div class="d-flex justify-content-between">
                <small class="text-muted">{{ article.created_at }}</small>
                <ArticleStats :statistics="article.statistics" />
            </div>
        </div>
    </div>
    <h2 class="mt-3 mb-2 text-center">Комментарии</h2>
    <ArticleComments :comments="article.comments" />
</template>

<script>
// import { mapActions, mapGetters } from "vuex";
import ArticleComments from "./ArticleComments.vue";
import ArticleStats from "./ArticleStats.vue";

export default {
    props: {
        article_id: {
            type: Number,
            default: null,
        },
    },
    components: { ArticleStats, ArticleComments },
    computed: {
        article() {
            return this.$store.getters.getArticle;
        },
    },
    mounted() {
        this.$store.commit("setArticleId", this.article_id);
        this.$store.dispatch("getArticleData");
        // this.getArticleData();
    },
    // methods: mapActions(["getArticleData"]),
    // computed: mapGetters(["getArticle"]),
};
</script>
