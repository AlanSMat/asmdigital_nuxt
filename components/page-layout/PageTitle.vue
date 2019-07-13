<template>
  <div class="layer-wrapper">
    <div class="layer-ttl ptb-20">
      <span class="page-title-wrapper">
        <h4>
          {{ pageTitle }}
          <span class="text-primary"></span>
        </h4>
      </span>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    pageTitle: {
      type: String,
      required: true
    }
  }
}
</script>

<style lang="scss" scope>
.page-title-wrapper {
}
</style>
 