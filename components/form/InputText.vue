<template>
  <div class="mdl-textfield">
    <input
      type="text"
      :size="size"
      :name="name"
      :id="id"
      @focus="swapLabel"
      @blur="swapLabel"
      class="mdl-textfield__input"
    />
    <label :id="labelId" class="mdl-textfield__label" v-if="LabelName" for="name">{{ LabelName }}</label>
  </div>
</template>

<script>
export default {
  props: {
    name: {
      type: String,
      required: true
    },
    LabelName: {
      type: String,
      required: false
    },
    id: {
      type: String,
      required: true
    },
    size: {
      type: Number,
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
    swapLabel() {
      //if (document.getElementById(this.Id).focus()) {
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
