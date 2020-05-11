<template>
    <div class="paper">
        <slot></slot>
    </div>
</template>

<script>
  export default {
    name: 'paper',
  }
</script>

<style scoped>
    .paper{
        background-color:#fff;
        background-clip: border-box;
        border-radius: 0.25rem;
        box-shadow: 0 0 0 1px rgba(49,49,93,.03), 0 2px 5px 0 rgba(49,49,93,.1), 0 1px 2px 0 rgba(0,0,0,.08);
    }
</style>
