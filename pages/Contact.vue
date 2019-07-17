<template>
  <form @submit.prevent="test">
    <input type="email" name="email" v-model.trim="$v.email.$model" />
    <p v-if="!$v.email.required">The email field is required!</p>
    <p v-if="!$v.email.email">The input must be a proper email!</p>
    <input type="password" name="password" v-model.trim="$v.password.$model" />
    <button type="submit">Submit</button>
  </form>
</template>

<script>
import { required, minLength, email } from 'vuelidate/lib/validators'

export default {
  name: 'VueliForm',
  data() {
    return {
      email: '',
      password: ''
    }
  },
  validations: {
    email: {
      required,
      email
    },
    password: {
      required,
      minLength: minLength(6)
    }
  },
  methods: {
    test() {
      this.$v.$touch()
    }
  }
}
</script>
<style scoped>
.title {
  font-family: 'Quicksand', 'Source Sans Pro', -apple-system, BlinkMacSystemFont,
    'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif;
  display: block;
  font-weight: 400;
  font-size: 100px;
  color: #2e495e;
  letter-spacing: 1px;
  font-size: 6em;
}
.green {
  color: #00c48d;
}

.subtitle {
  font-weight: 300;
  font-size: 3em;
  color: #2e495e;
  word-spacing: 5px;
  padding-bottom: 15px;
}

.links {
  padding-top: 15px;
}
</style>