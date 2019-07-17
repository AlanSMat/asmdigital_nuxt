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
        <div class="contact-form-container">
          <form action="/thanks" id="contactForm" name="contact" method="POST" data-netlify="true">
            <div class="contact-row container-flex container-flex__center">
              <div class="contact-cell">
                <div class="mdl-textfield">
                  <input
                    type="text"
                    name="contactName"
                    v-model.trim="$v.contactName.$model"
                    :class="status($v.contactName)"
                    class="mdl-textfield__input"
                  />
                  <p v-if="!$v.contactName.required">The contact name field is required!</p>
                </div>
              </div>
              <div class="contact-cell">
                <div class="mdl-textfield">
                  <input
                    type="email"
                    name="email"
                    v-model.trim="$v.contactEmail.$model"
                    :class="status($v.contactEmail)"
                    class="mdl-textfield__input"
                  />
                  <p v-if="!$v.contactEmail.required">The email field is required!</p>
                  <p v-if="!$v.contactEmail.email">The input must be a proper email!</p>
                </div>
              </div>
            </div>
            <div class="contact-row container-flex container-flex__center">
              <div class="contact-cell">
                <div class="mdl-textfield">
                  <input
                    type="text"
                    name="contactPhone"
                    v-model.trim="$v.contactPhone.$model"
                    :class="status($v.contactPhone)"
                    class="mdl-textfield__input"
                  />
                  <p v-if="!$v.contactPhone.required">The contact phone field is required!</p>
                </div>
              </div>
              <div class="contact-cell">
                <div class="mdl-textfield">
                  <input type="text" name="contactSubject" class="mdl-textfield__input" />
                </div>
              </div>
            </div>
            <div class="contact-cell"></div>

            <pre>
            {{ $v }}
            </pre>
            <button type="submit" class="btn btn-primary" @click.prevent="checkForm">Submit</button>
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
      this.formTouched = !this.$v.$anyDirty
      this.errors = this.$v.$anyError
      this.uiState = 'submit clicked'
      if (this.errors === false && this.formTouched === false) {
        //console.log(event.preventDefault)
        document.getElementById('contactForm').submit()
      }
    }
  }
}
</script>
<style lang="scss" scoped>
@import '@/assets/scss/main.scss';

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
</style>