<template>
  <div id="single-blog">
    <div class="loader" v-if="loading">
      <div class="loading"></div>
    </div>
    <div v-if="!loading">
      <div class="layer-wrapper mb-5">
        <div class="content-wrapper br-15">
          <div class="image-wrapper">
            <img :src="blog.imageUrl" v-if="blog.imageUrl" width="100%" class="brt-15" alt />
          </div>
          <div class="text-wrapper">
            <h2>{{ blog.title }}</h2>
            <div v-html="blog.content"></div>
          </div>
          <credits
            v-if="blog.from !== null"
            class="post-credits post-credits--left"
            :postedDate="blog.postedDate"
            :from="blog.from"
          ></credits>
          <div id="single-blog-button-container">
            <nuxt-link :to="`/news`" class="link-icon mt-3 ml-2">
              <i class="ti-angle-double-left pt-1"></i>
              <span>Back</span>
            </nuxt-link>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
import credits from './credits'

export default {
  components: {
    credits
  },
  data() {
    return {
      loading: false,
      postId: this.$route.params.postId,
      blog: {
        title: null,
        content: null,
        imageUrl: null,
        postedDate: null,
        from: null
      }
    }
  },
  methods: {},
  created() {
    axios
      .get(
        `https://asmather.com/wp/wp-json/wp/v2/blogs?_embed`,
        (this.loading = true)
      )
      .then(res => {
        this.blog.title = res.data[this.postId].title.rendered
        this.blog.content = res.data[this.postId].content.rendered
        this.blog.imageUrl =
          res.data[this.postId]._embedded['wp:featuredmedia'][0].source_url
        this.blog.postedDate = res.data[this.postId].date
        this.blog.from = res.data[this.postId].acf.from
        this.loading = false
      })
  }
}
</script>

<style lang="scss" scoped>
@import '@/assets/scss/main.scss';

/** post-credits class is in main.scss */

.post-credits--left {
  padding-left: 1.9rem;
}

h2 {
  margin-bottom: 10px;
}

.text-wrapper {
  padding: 20px;
}

#single-blog-button-container {
  margin: 1rem 1rem;
}
#single-blog {
  max-width: 960px;
  margin: 0 auto;
}
.brt-15 {
  border-radius: 15px 15px 0rem 0rem;
}
</style>
