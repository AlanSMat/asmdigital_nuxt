<template>
  <div>
    <div
      class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input is-upgraded"
      data-upgraded=",MaterialTextfield"
    >
      <textarea class="mdl-textfield__input" rows="6" cols="30" id="message"></textarea>
      <label class="mdl-textfield__label" for="message">Your Message</label>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    rows: {
      type: String,
      required: false
    },
    cols: {
      type: String,
      required: false
    }
  }
}
</script>

<style lang="scss" scope>
@import '@/assets/scss/main.scss';
</style>
