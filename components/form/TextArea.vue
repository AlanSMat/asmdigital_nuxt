<template>
  <div>
    <div
      class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label form-input is-upgraded"
      data-upgraded=",MaterialTextfield"
    >
      <textarea
        class="mdl-textfield__input"
        rows="6"
        :name="name"
        :id="id"
        @focus="swapLabel"
        @blur="swapLabel"
      ></textarea>
      <label :id="labelId" class="mdl-textfield__label" for="message">Your Message</label>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    id: {
      type: String,
      required: true
    },
    name: {
      type: String,
      required: true
    },
    rows: {
      type: String,
      required: false
    },
    cols: {
      type: String,
      required: false
    }
  },
  data() {
    return {
      labelId: 'label' + this.id,
      labelClass: 'mdl-textfield__label',
      altLabelClass: 'mdl-textfield__alt-label'
    }
  },
  methods: {
    // moves the elements label up when the element is focused and back down on blur
    swapLabel() {
      const labelElement = document.getElementById(this.labelId)
      const inputElement = document.getElementById(this.id)
      if (labelElement.className === this.labelClass) {
        labelElement.className = this.altLabelClass
      } else if (
        labelElement.className === this.altLabelClass &&
        inputElement.value === ''
      ) {
        labelElement.className = this.labelClass
      }
    }
  }
}
</script>

<style lang="scss" scope>
@import '@/assets/scss/main.scss';
</style>
