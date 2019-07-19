<template>
  <div>
    <transition
      v-on:before-enter="beforeEnter"
      v-on:enter="enter"
      v-on:after-enter="afterEnter"
      v-on:before-leave="beforeLeave"
      v-on:leave="leave"
      v-on:after-leave="afterLeave"
      appear
    >
      <Header />
    </transition>

    <nuxt />

    <Footer />
  </div>
</template>
<script>
import Header from './Header.vue'
import Footer from './Footer.vue'

export default {
  components: {
    Header,
    Footer
  },
  data() {
    return {}
  }
}
</script>
<style lang="scss" scop>
@import '@/assets/scss/main.scss';
</style>
