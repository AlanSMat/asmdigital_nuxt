<template>
  <div>
    <header>
      <div class="header-container">
        <div class="logo-container">
          <div class="logo-squares">
            <img src="@/assets/imgs/logo-squares.gif" alt="logo" />
          </div>
          <div class="logo-text reverse-out-font-barlow">ASM DIGITAL</div>
        </div>
        <div class="header-nav pr-5">
          <div class="header-nav-item">
            <nuxt-link to="/">Home</nuxt-link>
            <span></span>
          </div>
          <div class="header-nav-item">
            <nuxt-link to="/services">Services</nuxt-link>
            <span></span>
          </div>
          <div class="header-nav-item">
            <nuxt-link to="/portfolio">Portfolio</nuxt-link>
            <span></span>
          </div>
          <div class="header-nav-item">
            <nuxt-link to="/news">News</nuxt-link>
            <span></span>
          </div>
          <div class="header-nav-item">
            <nuxt-link to="/contact">Contact</nuxt-link>
            <span></span>
          </div>
        </div>
        <!-- Dropdown Menu -->
        <div class="dropdown">
          <div class="menu-btn">
            <button @click="hamburgerNav()" class="fas fa-bars dropbtn"></button>
          </div>
          <div id="navDropdown" class="dropdown-content">
            <nuxt-link to="/">Home</nuxt-link>
            <nuxt-link to="/services">Services</nuxt-link>
            <nuxt-link to="/portfolio">Portfolio</nuxt-link>
            <nuxt-link to="/contact">Contact</nuxt-link>
          </div>
        </div>
      </div>
    </header>
    <div id="carousel-container">
      <div class="bg-image-text-box">
        <h1 class="bg-image-heading">
          <span class="main">ASM Digital</span>
          <span class="sub">Responsive Web Design</span>
        </h1>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Header',
  methods: {
    hamburgerNav() {
      document.getElementById('navDropdown').classList.toggle('show')
    }
  }
}
</script>

<style lang="scss">
@import '@/assets/scss/main.scss';

.nuxt-link-exact-active {
  color: #fff;
}

#carousel-container {
  background-image: linear-gradient(
      to right bottom,
      rgba(0, 0, 0, 0.5),
      rgba(0, 0, 0, 0.5)
    ),
    url('../assets/imgs/bg-images/tech-green.jpg');
}
</style>
