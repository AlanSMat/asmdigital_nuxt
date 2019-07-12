<template>
  <div>
    <div class="form-container">
      <div class="contact-column">
        <form id="contactForm" action="/" @submit="checkForm" method="post">
          <div class="form-row">
            <i class="fa fa-user contact-form-icon-container" aria-hidden="true"></i>
            <input
              type="text"
              id="contactName"
              name="contactName"
              class="input-field"
              placeholder="Your Name"
            />
          </div>
          <div class="form-row">
            <i class="fa fa-phone contact-form-icon-container" aria-hidden="true"></i>
            <input
              type="text"
              id="contactPhone"
              name="contactPhone"
              class="input-field"
              placeholder="Phone Number"
            />
          </div>
          <div class="form-row">
            <i class="fa fa-envelope contact-form-icon-container" aria-hidden="true"></i>
            <input
              type="email"
              id="contactEmail"
              name="contactEmail"
              class="input-field"
              placeholder="Email"
            />
          </div>
          <div class="form-row">
            <textarea
              id="contactMessage"
              name="contactMessage"
              class="input-field footer-text-area"
              placeholder="Message"
            ></textarea>
          </div>
          <div class="form-row">
            <input id="contactSubmitBtn" type="submit" class="btn-contact" value="Submit" />
          </div>
        </form>
      </div>
      <div class="contact-column map-container">
        <iframe
          src="https://www.google.com.au/maps/d/embed?mid=10bY-OPEzudAblQ-Wa55q0aaU2LB5l17f"
          height="480"
          class="contact-column-60"
        ></iframe>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";

export default {
  name: "contact",
  data() {
    return {
      // this array corresponds to elements in the form
      formData: [
        {
          id: "contactName",
          validType: "text",
          value: null
        },
        {
          id: "contactPhone",
          validType: "phone",
          value: null
        },
        {
          id: "contactEmail",
          validType: "email",
          value: null
        },
        {
          id: "contactMessage",
          validType: "text",
          value: null
        }
      ]
    };
  },
  methods: {
    textLength(value) {
      if (value.length < 2) {
        return false;
      }
      return true;
    },
    validPhone(phone) {
      var re = /^(\+?\d{3}[-. ]?)?(\(?\d{1,2}\)?)?[-. ]?\d{3,4}[-. ]?\d{3,4}[-. ]?(\d{3}[-. ]?)?$/;
      return re.test(phone);
    },
    validEmail: function(email) {
      var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    },
    checkForm: function(event) {
      this.formData.forEach(arrayItem => {
        let elmToValidate = document.getElementById(arrayItem.id);
        elmToValidate.classList.remove("invalid");
        switch (arrayItem.validType) {
          case "text":
            if (!this.textLength(elmToValidate.value)) {
              //elmToValidate.classList.add("invalid");
              return false;
            }
            break;
          case "phone":
            if (!this.textLength(elmToValidate.value)) {
              //elmToValidate.classList.add("invalid");
              return false;
            }
            break;
          case "email":
            if (!this.textLength(elmToValidate.value)) {
              //elmToValidate.classList.add("invalid");
              return false;
            }
            break;
        }
        // copy value into the data array object
        arrayItem.value = elmToValidate.value;
      });

      this.postNow();
      event.preventDefault();
    },
    postNow: function() {
      let fname = this.formData.id;

      const json = {
        fname: this.formData[0].value
      };

      let jsonData = {
        name: "Name",
        value: "Steve"
      };

      let fd = jsonData;
      console.log(fd);

      axios
        .post(
          "https://www.asmdigital.com.au/dist/site/thanks/",
          //"https://getsimpleform.com/messages?form_api_token=7a1e4a709c165188640f11a8fbb1519c",
          JSON.stringify(fd),
          {
            headers: {
              "Content-type": "application/x-www-form-urlencoded"
            }
          }
        )
        .then(r => console.log("r: ", JSON.stringify(r, null, 2)));
    }
  }
};
</script>
<style lang="scss" scoped>
.invalid {
  border: 1px solid red;
}
</style>

