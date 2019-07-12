<template>
  <div class="sub-ttl">
    <h6 class="sub-ttl-text">
      {{ pageSubTitle }}
      <span class="text-primary"></span>
    </h6>
  </div>
</template>

<script>
export default {
  props: {
    pageSubTitle: {
      type: String,
      required: true
    }
  }
}
</script>

<style lang="scss" scope>
@import '@/assets/scss/main.scss';

.sub-ttl {
  text-align: center;
  margin: 0 0 20px 0;
}

.sub-ttl-text {
  position: relative;
  display: inline-block;
  font-family: 'Dosis', 'Poppins', sans-serif;
  font-size: 24px;
  font-weight: 400;
  padding: 0 15px;
  letter-spacing: 0.5px;
  color: #555;
}
.sub-ttl-text::before,
.sub-ttl-text:after {
  content: '';
  position: absolute;
  top: 55%;
  width: 40px;
  height: 2px;
  background: $color-blue-light;
}
.sub-ttl-text::before {
  right: 100%;
}
.sub-ttl-text::after {
  left: 100%;
}

.sub-ttl-white {
  color: #fff;
}
</style>
