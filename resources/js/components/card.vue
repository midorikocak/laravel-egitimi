<template>

    <div class="card">
        <div class="card-header">{{ title }}</div>

        <div class="card-body">
            {{ content }}
        </div>
    </div>

</template>

<script>
    export default {
        props: ['title'],
        mounted () {
            console.log('Component mounted.')
        },
    }
</script>
