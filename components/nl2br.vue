<template>
  <div v-html="parseContent(content)"></div>
</template>

<script>
export default {
  props: ["content", "snippetLength"],
  methods: {
    parseContent(value) {
      var breakTag = "<br>";
      var contentText = (value + "").replace(
        /([^>\r\n]?)(\r\n|\n\r|\r|\n)/g,
        "$1" + breakTag + "$2"
      );
      if (this.snippetLength) {
        return contentText.slice(0, this.snippetLength) + " ......";
      }
      return contentText;
    }
  }
};
</script>

<style>
</style>
