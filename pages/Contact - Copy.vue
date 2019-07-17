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
          <form
            id="contactForm"
            name="contact"
            @submit="checkForm"
            method="POST"
            data-netlify="true"
          >
            <div class="contact-row container-flex container-flex__center">
              <div class="contact-cell">
                <g-input-text name="contactName" id="contactName" LabelName="Your Name" />
              </div>
              <div class="contact-cell">
                <g-input-text name="contactEmail" id="contactEmail" LabelName="Your Email Address" />
              </div>
            </div>
            <div class="contact-row container-flex container-flex__center">
              <div class="contact-cell">
                <g-input-text name="contactPhone" id="contactPhone" LabelName="Your Phone Number" />
              </div>
              <div class="contact-cell">
                <g-input-text name="subject" id="contactSubject" LabelName="Your Subject" />
              </div>
            </div>
            <div class="contact-row container-flex container-flex__center">
              <div>
                <g-text-area
                  rows="5"
                  cols="5"
                  name="contactMessage"
                  id="contactMessage"
                  LabelName="Your Message"
                />
              </div>
            </div>
            <div class="contact-row container-flex container-flex__center pb-5">
              <div>
                <!-- @clickedBtn is a method in the child component -->
                <g-button title="Submit" @clickedBtn="checkForm($event)" />
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from 'axios'
import { required, minLength, between } from 'vuelidate/lib/validators'

export default {
  data() {
    return {
      formData: [
        {
          id: 'contactName',
          validType: 'text',
          value: null
        },
        {
          id: 'contactPhone',
          validType: 'phone',
          value: null
        },
        {
          id: 'contactEmail',
          validType: 'email',
          value: null
        },
        {
          id: 'contactMessage',
          validType: 'text',
          value: null
        }
      ],
      submitForm: false
    }
  },
  validations: {
    name: {
      required,
      minLength: minLength(4)
    },
    age: {
      between: between(20, 30)
    }
  },
  methods: {
    valid(event) {
      console.log(event)
    },
    textLength(value) {
      if (value.length < 2) {
        return false
      }
      return true
    },
    validPhone(phone) {
      var re = /^(\+?\d{3}[-. ]?)?(\(?\d{1,2}\)?)?[-. ]?\d{3,4}[-. ]?\d{3,4}[-. ]?(\d{3}[-. ]?)?$/
      return re.test(phone)
    },
    validEmail: function(email) {
      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      return re.test(email)
    },
    checkForm(submitBtnClicked) {
      let submitForm = true
      this.formData.forEach(arrayItem => {
        let elmToValidate = document.getElementById(arrayItem.id)
        elmToValidate.classList.remove('invalid')
        switch (arrayItem.validType) {
          case 'text':
            if (!this.textLength(elmToValidate.value)) {
              elmToValidate.classList.add('invalid')
              submitForm = false
            }
            break
          case 'phone':
            if (!this.validPhone(elmToValidate.value)) {
              elmToValidate.classList.add('invalid')
              submitForm = false
            }
            break
          case 'email':
            if (!this.validEmail(elmToValidate.value)) {
              elmToValidate.classList.add('invalid')
              submitForm = false
            }
            break
        }
        //copy value into the data array object
        arrayItem.value = elmToValidate.value
      })
      if (!submitForm) {
        submitBtnClicked.preventDefault()
      }
      return true
    },
    postNow() {
      let jsonData = {
        name: 'Name',
        value: 'Steve'
      }

      let fd = jsonData

      axios
        .post(
          //'https://www.asmdigital.com.au/dist/site/thanks/',
          'https://getsimpleform.com/messages/ajax?form_api_token=7a1e4a709c165188640f11a8fbb1519c',
          fd,
          {
            // headers: {
            //   'Content-type': 'application/x-www-form-urlencoded'
            // }
          }
        )
        .then(() => {
          console.log('sent')
        })
    }
  }
}
</script>
<style lang="scss" scope>
@import '@/assets/scss/main.scss';

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