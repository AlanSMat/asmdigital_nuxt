<template>
  <div v-if="categories.length !== 0" class="pb-2">
    <span
      :key="category.id"
      v-for="category in categories"
      class="badge badge-light badge-pill badge-sm m-1"
    >{{ category.name }}</span>
  </div>
</template>

<script>
export default {
  props: {
    categories: {
      type: Array,
      required: true
    }
  }
}
</script>

<style lang="scss" scope>
@import '@/assets/scss/main.scss';
</style>
