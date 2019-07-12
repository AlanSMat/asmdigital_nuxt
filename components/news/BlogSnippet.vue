<template>
  <div class="container">
    <div class="row pb-20">
      <div class="col-sm-4 pt-3">
        <img :src="blog.imageUrl" v-if="blog.imageUrl" class="img" :alt="blog.title" />
      </div>
      <div class="col list-content">
        <h4 class="title-blog">
          <nuxt-link :to="`/news/${blog.arrIndex}`">{{ blog.title }}</nuxt-link>
        </h4>
        <div class="blog-meta">
          <credits class="post-credits" :postedDate="blog.postedDate" :from="blog.from"></credits>
        </div>
        <p class="description" v-html="blog.excerpt"></p>
        <categories :categories="categories" class="pt-2" />
        <nuxt-link :to="`/news/${blog.arrIndex}`" class="link-icon mt-3 ml-2">
          <span>View More</span>
          <i class="ti-angle-double-right pt-1"></i>
        </nuxt-link>
      </div>
    </div>
  </div>
</template>

<script>
import credits from './credits'
import categories from './categories'
import axios from 'axios'

export default {
  components: {
    credits,
    categories
  },
  props: {
    blog: {
      type: Object,
      required: true
    }
  },
  data() {
    return {
      categories: [],
      excerpt: this.blog.excerpt
      //cat: JSON.parse(localStorage.getItem('categories'))
    }
  },
  created() {
    //https://asmather.com/wp/wp-json/wp/v2/categories/50
    if (this.blog.categories.length !== 0) {
      this.blog.categories.map(itemId => {
        axios
          .get(`https://asmather.com/wp/wp-json/wp/v2/categories/${itemId}`)
          .then(res => {
            this.categories.push({
              id: res.data.id,
              name: res.data.name
            })
          })
      })
      console.log(this.categories)
    }
  },
  beforeDestroy() {
    console.log('xx')
    console.log(this.categories)
    //localStorage.setItem('categories', JSON.stringify(this.categories))
  }
}
</script>

<style lang="scss" scope>
@import '@/assets/scss/main.scss';

.excerpt {
  margin-bottom: 10px;
}

.sidebar {
  padding: 10px;
  margin: 0 0 10px 0;
}

.list-img img:hover {
  opacity: 8;
}

.snippet-wrapper {
  display: flex;
  background: #fff;
  margin: 2rem;
  position: relative;
  padding-bottom: 20px;
}

.blog-content {
  padding: 10px;
}

.link-icon {
  display: inline-block;
  font-size: 14px;
  color: $color-blue-primary;
}
.link-icon i {
  padding: 0 5px;
}

.link-icon i,
.link-icon span {
  display: table-cell;
  vertical-align: middle;
}

@include respond('tab-port') {
  .container {
    padding: 0 5px;
  }
}
</style>
