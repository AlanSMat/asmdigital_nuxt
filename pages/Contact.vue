<template>
  <div>
    <global-page-title pageTitle="Contact Us"></global-page-title>
    <div class="footer-col-container">
      <div class="page-container">
        <p>
          We always look forward to hearing from you, for any business enquiries or feedback please
          fill out the form below or email us and we will get back to you as soon as possible
        </p>

        <p>
          We gaurantee that all mail received will be treated as strictly confidential and your details will never be
          shared with any other organisation.
        </p>
        <!-- <contact-form></contact-form> -->
        <div class="contact-form-container mt-5 pt-5 pb-5 mb-5 bg-color-white br-15">
          <div class="contact-row container-flex container-flex__center">
            <div class="contact-cell">
              <g-input-text name="name" id="name" LabelName="Your Name" />
            </div>
            <div class="contact-cell">
              <g-input-text name="email" id="email" LabelName="Your Email Address" />
            </div>
          </div>
          <div class="contact-row container-flex container-flex__center">
            <div class="contact-cell">
              <g-input-text name="phone" id="phone" LabelName="Your Phone Number" />
            </div>
            <div class="contact-cell">
              <g-input-text name="subject" id="subject" LabelName="Your Subject" />
            </div>
          </div>
          <div class="contact-row container-flex container-flex__center">
            <div>
              <g-text-area rows="5" cols="5" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import ContactForm from '../components/ContactForm.vue'

export default {
  components: {
    'contact-form': ContactForm
  },
  name: 'Contact'
}
</script>
<style lang="scss" scope>
@import '@/assets/scss/main.scss';

.contact-form-container {
  background-color: #fff;
}

.contact-row {
}

.contact-cell {
  margin: 0 1.5rem;
}
</style>