<template>
  <div>
    <global-page-title pageTitle="Portfolio" />
    <portfolio-list :portfolio="portfolio" />
  </div>
</template>

<script>
import PortfolioList from '../components/PortfolioList.vue'
//import { mapGetters } from "vuex";

//console.log(state);

export default {
  name: 'Portfolio',
  components: {
    'portfolio-list': PortfolioList
  },
  data() {
    return {
      portfolio: [
        {
          id: 1,
          title: 'Al Services',
          img: require('@/assets/imgs/portfolio/alservices.png'),
          href: 'http://www.alservices.com.au'
        },
        {
          id: 2,
          title: 'Legal Will',
          img: require('@/assets/imgs/portfolio/legalwill.png'),
          href: 'http://www.legalwill.com.au'
        },
        {
          id: 3,
          title: 'On Q Recruitment',
          img: require('@/assets/imgs/portfolio/onq.png'),
          href: 'https://www.onqrecruitment.com.au/'
        },
        {
          id: 4,
          title: 'Turboxs',
          img: require('@/assets/imgs/portfolio/turboxs.png'),
          href: 'https://www.turboxs.com/'
        },
        {
          id: 5,
          title: 'Coopers Store',
          img: require('@/assets/imgs/portfolio/coopersstore.png'),
          href: 'https://www.coopersstore.com.au/'
        },
        {
          id: 6,
          title: 'Purrfect Ragdolls',
          img: require('@/assets/imgs/portfolio/ragdolls.jpg'),
          href: 'https://asmdigital.com.au/wp/purrfect-ragdolls/'
        }
      ]
    }
  }
}
</script>

