<template>
  <div>
    <img :src="imgSrc" :width="width" :height="height" :class="cssClass" :alt="alt" />
  </div>
</template>

<script>
export default {
  props: {
    src: {
      required: true,
      type: String
    },
    width: {
      required: false,
      type: String
    },
    height: {
      required: false,
      type: String
    },
    cssClass: {
      required: false,
      type: String
    },
    alt: {
      required: true,
      type: String
    }
  },
  data() {
    return {
      imgSrc: '/_nuxt/assets/imgs/' + this.src
    }
  }
}
</script>

<style lang="scss" scoped>
@import '@/assets/scss/main.scss';
img {
  border-radius: 15px;
  box-shadow: 0 0.3rem 0.3rem #ccc;
}
.img-container {
  margin: auto;
}
</style>
