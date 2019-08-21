<template>
  <div>
    <global-page-title pageTitle="Contact Us"></global-page-title>
    <div class="footer-col-container">
      <div class="content-wrapper br-15">
        <p>
          We always look forward to hearing from you, for any business enquiries or feedback please
          fill out the form below or email us and we will get back to you as soon as possible
        </p>

        <p>
          We gaurantee that all mail received will be treated as strictly confidential and your details will never be
          shared with any other organisation.
        </p>
        <div class="contact-form-container">
          <form
            id="contactForm"
            name="contact"
            action="/thanks/"
            method="POST"
            Content-Type="application/x-www-form-urlencoded"
            data-netlify="true"
          >
            <div class="contact-row container-flex container-flex__center pt-4">
              <div class="contact-cell">
                <div class="mdl-textfield">
                  <input
                    type="text"
                    name="contactName"
                    v-model.trim="$v.contactName.$model"
                    :class="status($v.contactName)"
                    class="mdl-textfield__input"
                    placeholder="Your Name"
                  />
                </div>
              </div>
              <div class="contact-cell">
                <div class="mdl-textfield">
                  <input
                    type="email"
                    name="contactEmail"
                    v-model.trim="$v.contactEmail.$model"
                    :class="status($v.contactEmail)"
                    class="mdl-textfield__input"
                    placeholder="Your Email"
                  />
                </div>
              </div>
            </div>
            <div class="contact-row container-flex container-flex__center pt-4">
              <div class="contact-cell">
                <div class="mdl-textfield">
                  <input
                    type="text"
                    name="contactPhone"
                    v-model.trim="$v.contactPhone.$model"
                    :class="status($v.contactPhone)"
                    class="mdl-textfield__input"
                    placeholder="Your Phone"
                  />
                </div>
              </div>
              <div class="contact-cell">
                <div class="mdl-textfield">
                  <input
                    type="text"
                    name="contactSubject"
                    placeholder="Your Subject"
                    class="mdl-textfield__input"
                  />
                </div>
              </div>
            </div>
            <div class="contact-row container-flex container-flex__center pt-4">
              <div class="mdl-textfield">
                <textarea
                  rows="8"
                  cols="58"
                  name="contactMessage"
                  class="mdl-textfield__input"
                  id="contactMessage"
                  placeholder="Your Message"
                ></textarea>
              </div>
            </div>
            <div class="contact-row container-flex container-flex__center pb-5">
              <div class="mdl-textfield captcha-container">
                <div data-netlify-recaptcha="true"></div>
              </div>
            </div>
            <div class="contact-row container-flex container-flex__center pb-5">
              <div class="contact-cell">
                <g-button title="Submit"></g-button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { required, minLength, email, text } from 'vuelidate/lib/validators'
export default {
  name: 'VueliForm',
  data() {
    return {
      contactName: '',
      contactEmail: '',
      contactPhone: ''
    }
  },
  validations: {
    contactName: {
      required,
      minLength: minLength(4)
    },
    contactEmail: {
      required,
      email
    },
    contactPhone: {
      required
    }
  },
  methods: {
    status(validation) {
      return {
        error: validation.$error,
        dirty: validation.$dirty
      }
    },
    checkForm() {
      //this.formTouched = !this.$v.$anyDirty
      //this.errors = this.$v.$anyError
      // if any error is true && anydirty is true stop
      // if any error is true && anydirty is false stop
      // if any error is false && anydirty is true go
      //console.log(this.errors + ' - ' + this.formTouched)
      // if (
      //   (this.errors && this.formTouched) ||
      //   (!this.errors && this.formTouched)
      // ) {
      //   console.log('x')
      //event.preventDefault()
      // }
    }
  }
}
</script>
<style lang="scss" scoped>
@import '@/assets/scss/main.scss';

.captcha-container {
  width: 30rem;
}

.content-wrapper {
  padding: 2.5rem 2.5rem 0.8rem 2.5rem;
  margin: 0 3.5rem 3.5rem 3.5rem;
  box-shadow: 0 0.2rem 0.4rem #ccc;
}

input {
  border: 1px solid silver;
  border-radius: 4px;
  background: white;
  padding: 5px 10px;
}

.dirty {
  border-color: #5a5;
  background: #efe;
}

.dirty:focus {
  outline-color: #8e8;
}

.error {
  border-color: red;
  background: #fdd;
}

.error:focus {
  outline-color: #f99;
}

.contact-form-container {
  background-color: #fff;
  padding: 5px 0;
  margin: 15px 0;
  border-radius: 15px;
}
.contact-row {
}
.contact-cell {
  margin: 0 1.5rem;
}
.invalid {
  border: 1px solid red;
}
input[type='text'] {
  padding: 5px;
}
</style>