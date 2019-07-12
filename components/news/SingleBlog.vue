<template>
  <div id="single-blog">
    <div class="layer-wrapper">
      <div class="content-wrapper u-box-shadow">
        <div class="image-wrapper">
          <img :src="blog.imageUrl" v-if="blog.imageUrl" width="100%" alt />
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
      </div>
      <!-- buttons -->
      <div id="single-blog-button-container">
        <span class="u-button-container-margin-right-sml">
          <nuxt-link to="/news">
            <button class="btn u-box-shadow">Back</button>
          </nuxt-link>
        </span>
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
      .get(`https://asmather.com/wp/wp-json/wp/v2/blogs?_embed`)
      .then(res => {
        this.blog.title = res.data[this.postId].title.rendered
        this.blog.content = res.data[this.postId].content.rendered
        this.blog.imageUrl =
          res.data[this.postId]._embedded['wp:featuredmedia'][0].source_url
        this.blog.postedDate = res.data[this.postId].date
        this.blog.from = res.data[this.postId].acf.from
      })
  },
  mounted() {
    this.$nextTick(() => {
      this.$nuxt.$loading.start()

      setTimeout(() => this.$nuxt.$loading.finish(), 1500)
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

.content-wrapper {
  background-color: #fff;
  border: 1px solid $color-grey-light;
  position: relative;
}

.text-wrapper {
  padding: 20px;
}

#single-blog-button-container {
  margin-top: 1rem;
}
#single-blog {
  max-width: 960px;
  margin: 0 auto;
}
</style>
