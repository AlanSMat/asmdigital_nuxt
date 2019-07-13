<template>
  <div>
    <global-page-title pageTitle="News"></global-page-title>
    <single-blog></single-blog>
  </div>
</template>

<script>
import SingleBlog from '@/components/news/SingleBlog.vue'
export default {
  components: {
    'single-blog': SingleBlog
  }
}
</script>

<style>
</style>
