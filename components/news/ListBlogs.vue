<template>
  <div>
    <div class="loader" v-if="loading">
      <div class="loading"></div>
    </div>
    <div v-if="!loading">
      <global-page-title pageTitle="News"></global-page-title>
      <div class="blog-flex-container">
        <div class="blog-left-container">
          <blog-snippet :key="blog.arrIndex" :blog="blog" v-for="blog in blogs" />
        </div>
        <div class="blog-right-container">
          <div class="sidebar br-15 pl-5 pr-5 pb-5">
            <global-page-sub-title pageSubTitle="Recent Posts" />
            <p
              :key="blog.arrIndex"
              v-for="blog in blogs"
              class="sidebar-blog-headings"
            >{{ blog.title }}</p>
            <global-page-sub-title pageSubTitle="Categories" class="pt-4" />
            <ul class="category-list">
              <li>
                <a href="#">
                  <i class="fa fa-newspaper-o"></i>News
                </a>
                <span>(10)</span>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-history"></i>History
                </a>
                <span>(20)</span>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-th"></i>Mythology
                </a>
                <span>(9)</span>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-cloud"></i>Technology
                </a>
                <span>(21)</span>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-flask"></i>Science
                </a>
                <span>(13)</span>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-hospital"></i>Health
                </a>
                <span>(5)</span>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-wheelchair"></i>wellness
                </a>
                <span>(8)</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
import BlogSnippet from '@/components/news/BlogSnippet'
import { setTimeout } from 'timers'
import { constants } from 'crypto'
import { async } from 'q'

export default {
  components: {
    'blog-snippet': BlogSnippet
  },
  data() {
    return {
      limit: 10,
      blogs: [],
      blogCategories: [],
      search: '',
      blogId: 0,
      loading: false,
      categories: []
    }
  },
  methods: {},
  created() {
    // get all categories
    axios
      .get(
        `https://asmather.com/wp/wp-json/wp/v2/blogs?_embed`,
        (this.loading = true)
      )
      .then(blogRes => {
        blogRes.data.map(async (item, blogIndex) => {
          this.blogs.push({
            arrIndex: blogIndex,
            title: item.title.rendered,
            content: item.content.rendered,
            excerpt: item.excerpt.rendered,
            imageUrl: item._embedded['wp:featuredmedia'][0].source_url,
            postedDate: item.date,
            categories: blogRes.data[blogIndex].categories,
            from: item.acf.from
          })
        }) // end blog loop
        this.loading = false
      })
  }
}
</script>

<style scope lang="scss">
@import '@/assets/scss/main.scss';
@import '@/assets/scss/_loader.scss';

@include respond('big-desktop') {
  .blog-flex-container {
    width: 112rem;
    margin: auto;
  }
}

.blog-flex-container {
  display: flex;
  justify-content: space-evenly;
}

// blog-container flex column left
.blog-left-container {
  width: 65%;
}

.blog-right-container {
  width: 30%;
}

.list-blogs {
  padding-top: 30px;
}
.list-blogs {
  padding-top: 0px;
}

.list-blogs:last-child {
  border-bottom: 0px solid $color-grey-light;
  padding-bottom: 3rem;
}

.sidebar {
  background-color: #fff;
  box-shadow: 0 0.2rem 0.4rem #ccc;
}

.sidebar-blog-headings {
  font-family: 'Dosis', 'Poppins', sans-serif;
}

.sidebar-blog-headings {
  padding-bottom: 0.8rem;
}

@include respond('tab-land') {
  .blog-container {
    /* padding-left: 2px; */
  }
}
@include respond('tab-port') {
  .blog-flex-container {
    display: flex;
    justify-content: flex-end;
    flex-direction: column;
  }

  .blog-left-container {
    align-self: center;
    width: 90%;
  }

  .blog-right-container {
    align-self: center;
    width: 50%;
  }
}
@include respond('phone') {
  .blog-flex-container {
    display: flex;
    justify-content: flex-end;
    flex-direction: column;
  }

  .blog-left-container {
    align-self: center;
    width: 90%;
  }

  .blog-right-container {
    align-self: center;
    width: 90%;
  }
}
</style>
