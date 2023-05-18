<template>
    <div class="row row-cols-1 gy-3 gx-0 w-50 m-auto">
        <div v-for="comment in comments" :key="comment.id" class="card">
            <div class="card-header">
                {{ comment.subject }}
                <span class="float-end"> {{ comment.created_at }}</span>
            </div>
            <div class="card-body">
                <p class="card-text">{{ comment.body }}</p>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        comments: {
            type: Object,
            default: {},
        },
    },
};
</script>
