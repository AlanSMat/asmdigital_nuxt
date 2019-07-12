<template>
  <div class="blog-meta">
    <p>
      <i class="icon-user"></i>
      <span>Admin</span>
    </p>
    <p>
      <i class="icon-clock"></i>
      <span>
        <timeago
          :datetime="postedDate"
          :autoUpdate="autoUpdate ? 1 : 0"
          :converterOptions="{ includeSeconds: true }"
        />
      </span>
    </p>
    <p>
      <i class="ti-link"></i>
      <span>
        from:
        <a :href="from.url">{{from.title}}</a>
      </span>
    </p>
  </div>
</template>

<script>
import format from 'date-fns/format'

export default {
  components: {},
  name: 'credits',
  props: {
    postedDate: {
      type: String,
      required: false
    },
    from: {
      // recieves an object with the link, title and target
      type: Object,
      required: false
    }
  },
  data() {
    return {
      autoUpdate: false,
      datetime1: 'Wed Jun 26 2019 13:11:12',
      converter: undefined
    }
  }
}
</script>

<style lang="scss" scoped>
@import '@/assets/scss/main.scss';

a {
  color: $color-grey-medium;
  text-decoration: underline;
}
.credits {
  display: flex;
  align-items: center;
}
.group-space {
  margin-left: 1.5rem;
}
.fas .fa-link {
  color: #ccc !important;
}
</style>
