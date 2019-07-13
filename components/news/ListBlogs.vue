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
        <div class="blog-right-container br-5">
          <div class="sidebar br-15">
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
                  <i class="fa fa-info-circle"></i>New Disese
                </a>
                <span>(7)</span>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-hospital-o"></i>Health
                </a>
                <span>(5)</span>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-wheelchair-alt"></i>wellness
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

export default {
  components: {
    'blog-snippet': BlogSnippet
  },
  data() {
    return {
      limit: 10,
      blogs: [],
      categories: [],
      search: '',
      blogId: 0,
      loading: false
    }
  },
  created() {
    //https://asmather.com/wp/wp-json/wp/v2/categories/50
    axios
      .get(
        `https://asmather.com/wp/wp-json/wp/v2/blogs?_embed`,
        (this.loading = true)
      )
      .then(res => {
        let data = []
        res.data.map((item, i) => {
          res.data[i].arrIndex = i
          res.data[i].title = item.title.rendered
          res.data[i].content = item.content.rendered
          res.data[i].excerpt = item.excerpt.rendered
          res.data[i].imageUrl =
            item._embedded['wp:featuredmedia'][0].source_url
          res.data[i].postedDate = item.date
          res.data[i].from = item.acf.from
        })
        this.blogs = res.data
        localStorage.setItem('blogs', JSON.stringify(this.blogs))
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

.loader {
  height: 90vh;
}

.sidebar {
  background-color: #fff;
}

.sidebar-blog-headings {
  font-family: 'Dosis', 'Poppins', sans-serif;
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
