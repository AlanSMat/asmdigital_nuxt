<template>
  <div>
    <div class="layer-wrapper">
      <news-list-blogs></news-list-blogs>
    </div>
  </div>
</template>

<script>
import ListBlogs from '@/components/news/ListBlogs'

export default {
  components: {
    'news-list-blogs': ListBlogs
  },
  data() {
    return {
      pageTitle: 'News'
    }
  }
}
</script>
