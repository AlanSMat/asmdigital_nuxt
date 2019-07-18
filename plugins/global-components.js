import Vue from 'vue'
import PageTitle from '~/components/page-layout/PageTitle.vue'
import PageSubTitle from '~/components/page-layout/PageSubTitle.vue'
import Button from '~/components/page-layout/Button.vue'
import InputText from '~/components/form/InputText.vue'
import TextArea from '~/components/form/TextArea.vue'
import Img from '~/components/page-layout/Img.vue'

Vue.component('global-page-title', PageTitle)
Vue.component('global-page-sub-title', PageSubTitle)
Vue.component('g-button', Button)
Vue.component('g-input-text', InputText)
Vue.component('g-text-area', TextArea)
Vue.component('g-img', Img)
