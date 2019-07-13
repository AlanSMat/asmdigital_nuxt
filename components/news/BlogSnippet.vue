<template>
  <div class="snippet-flex-container br-10 mb-5">
    <div class="snippet-image-container ml-4 mt-4">
      <img :src="blog.imageUrl" v-if="blog.imageUrl" :alt="blog.title" class="snippet-image br-5" />
    </div>
    <div class="snippet-content-container ml-4 mt-3 mb-4">
      <h4 class="title-blog">
        <nuxt-link :to="`/news/${blog.arrIndex}`">{{ blog.title }}</nuxt-link>
      </h4>
      <div class="blog-meta">
        <credits class="post-credits" :postedDate="blog.postedDate" :from="blog.from"></credits>
      </div>
      <p class="description" v-html="blog.excerpt"></p>
      <!-- <categories :categories="blogCategories" class="pt-2" /> -->
      <nuxt-link :to="`/news/${blog.arrIndex}`" class="link-icon mt-3 ml-2">
        <span>View More</span>
        <i class="ti-angle-double-right pt-1"></i>
      </nuxt-link>
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
    },
    blogCategories: {
      type: Array,
      required: false
    }
  },
  data() {
    //console.log(this.blogCategories)

    return {
      categories: this.blogCategories,
      excerpt: this.blog.excerpt
      //cat: JSON.parse(localStorage.getItem('categories'))
    }
  },
  created() {
    //https://asmather.com/wp/wp-json/wp/v2/categories/50
    // if (this.blog.categories.length !== 0) {
    //   this.blog.categories.map(itemId => {
    //     axios
    //       .get(`https://asmather.com/wp/wp-json/wp/v2/categories/${itemId}`)
    //       .then(res => {
    //         this.categories.push({
    //           id: res.data.id,
    //           name: res.data.name
    //         })
    //       })
    //   })
    // }
  }
}
</script>

<style lang="scss" scope>
@import '@/assets/scss/main.scss';

.snippet-flex-container {
  display: flex;
  background-color: #fff;
}
.snippet-image-container {
  width: 25%;
}
.snippet-content-container {
  width: 65%;
}

.excerpt {
  margin-bottom: 10px;
}
.row {
  background-color: #fff;
  border-radius: 15px;
}
.sidebar {
  padding: 10px;
  margin: 0 0 10px 0;
}

.list-img img:hover {
  opacity: 8;
}
.img {
  border-radius: 5px;
  width: 20%;
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

@include respond('phone') {
  .snippet-flex-container {
    display: flex;
    background-color: #fff;
    flex-direction: column;
    justify-content: center;
  }
  .snippet-image-container {
    width: 90%;
    margin: 1.5rem;
    align-self: center;
  }
  .snippet-content-container {
    width: 90%;
    margin: 1.5rem;
    align-self: center;
  }
}
</style>
