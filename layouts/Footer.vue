<template>
  <div>
    <div class="footer-container">
      <!-- column 1 -->
      <div class="footer-column">
        <div class="footer-col-container">
          <h2 class="footer-heading">Quick Links</h2>
          <div class="footer-links">
            <ul>
              <li>
                <router-link to="/">Home</router-link>
              </li>
              <li>
                <router-link to="/services">Services</router-link>
              </li>
              <li>
                <router-link to="/portfolio">Portfolio</router-link>
              </li>
              <li>
                <router-link to="/contact">Contact</router-link>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <!-- column 2 -->
      <div class="footer-column">
        <div class="footer-border-sides">
          <h2 class="footer-heading">contact info</h2>
          <div class="display-flex">
            <div class="footer-icon-container">
              <i class="fa fa-map-marker fa-2x" aria-hidden="true"></i>
            </div>
            <div class="footer-cell">
              1/32 King Rd
              <br />Ingleburn, 2565
              <br />Sydney
            </div>
          </div>
          <div class="spacer"></div>
          <div class="display-flex">
            <div class="footer-icon-container">
              <i class="fa fa-phone fa-2x" aria-hidden="true"></i>
            </div>
            <div class="footer-cell">
              Tel: (02) 9829 5428
              <br />Mob: 0467 972 595
            </div>
          </div>
          <div class="spacer"></div>
          <div class="display-flex">
            <div class="footer-icon-container">
              <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
            </div>
            <div class="footer-cell">info@asmdigital.com.au</div>
          </div>
        </div>
      </div>
      <!-- column 3 -->
      <div class="footer-column">
        <div class="footer-col-container">
          <h2 class="footer-heading">Quick Contact</h2>
          <div class="footer-form-container">
            <form
              name="register"
              action="/thanks/"
              id="registerForm"
              method="POST"
              data-netlify="true"
            >
              <div class="footer-form-row">
                <i class="fa fa-user footer-form-icon-container" aria-hidden="true"></i>
                <input
                  type="text"
                  name="registerName"
                  class="input-field footer-input-field"
                  placeholder="Your Name"
                />
              </div>
              <div class="footer-form-row">
                <i class="fa fa-phone footer-form-icon-container" aria-hidden="true"></i>
                <input
                  type="text"
                  name="registerPhone"
                  class="input-field footer-input-field"
                  placeholder="Phone Number"
                />
              </div>
              <div class="footer-form-row">
                <i class="fa fa-envelope footer-form-icon-container" aria-hidden="true"></i>
                <input
                  type="text"
                  name="registerEmail"
                  class="input-field footer-input-field"
                  placeholder="Email"
                />
              </div>
              <div class="footer-form-row">
                <textarea
                  id="footerMessage"
                  class="input-field footer-text-area footer-input-field"
                  placeholder="Contact"
                  name="registerMessage"
                ></textarea>
              </div>
              <div class="footer-form-row">
                <button class="btn-contact">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-blue">
      <p>&copy; 2019 ASM DIGITAL</p>
    </div>
  </div>
</template>

<script>
export default {
  name: 'Footer'
}
</script>

<style lang="scss" scope>
@import '@/assets/scss/main.scss';

.footer-input-field {
  color: $color-grey-light;
}
</style>
