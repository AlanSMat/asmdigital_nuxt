<template>
  <div>
    <div v-if="route">
      <nuxt-link to="/news">
        <button class="btn btn-outline btn-default btn-pill btn-outline-1x m-1">{{title}}</button>
      </nuxt-link>
    </div>
    <div v-if="!route">
      <button class="btn btn-outline btn-default btn-pill btn-outline-1x m-1">{{title}}</button>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    title: {
      type: String,
      required: true
    },
    route: {
      type: String,
      required: false
    },
    link: {
      type: String,
      required: false
    }
  }
}
</script>

<style lang="scss" scope>
@import '@/assets/scss/main.scss';
@import '@/assets/scss/_loader.scss';
</style>
