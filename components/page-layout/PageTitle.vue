<template>
  <div class="layer-wrapper">
    <div class="layer-ttl ptb-20">
      <h4>
        {{ pageTitle }}
        <span class="text-primary"></span>
      </h4>
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

<style>
</style>
