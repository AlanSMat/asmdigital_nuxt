<template>
  <div>
    <global-page-title pageTitle="News"></global-page-title>
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
        <contact-form></contact-form>
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