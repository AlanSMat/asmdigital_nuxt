<template>
  <div>
    <button class="btn" @click="swapLabel">{{test}}</button>
  </div>
</template>

<script>
export default {
  data() {
    return {
      test: 'Test'
    }
  },
  methods: {
    testLog() {
      console.log('test')
    },
    swapLabel() {
      console.log('swap label')
    }
  }
}
</script>

<style>
</style>
