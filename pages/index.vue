<template>
  <div>
    <global-page-title pageTitle="Home" />
    <div class="layer-wrapper">
      <div class="content-wrapper br-15">
        <div class="paragraph-flex">
          <div class="img-container">
            <g-img src="laptop.jpg" width="240" alt="laptop" />
          </div>
          <div>
            <div class="paragraph-heading">Passionate about what we do</div>
            <p>
              We are passionate about all thing Web and love what we do. Our skills have been honed from
              many years of experience in the many different area's of the information technology industry.
            </p>
            <p>
              In this fast moving industry we're constantly updating our products and methods so that we have the skills and
              experience to provide you with the very best solution your business needs.
            </p>
          </div>
        </div>
        <div class="paragraph-flex">
          <div class="pb-5">
            <div class="paragraph-heading">Responsive website design and development</div>
            <p>
              The importance of responsive web design cannot be understated. Over 60% of Google web searches now come from
              mobile devices, so it's crucial that are your website adjusts to fit all screen sizes.
            </p>
          </div>
          <div>
            <g-img src="meeting-desk.jpg" width="260" alt="Meeting desk" />
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  components: {}
}
</script>
<style lang="scss" scope>
@import '@/assets/scss/main.scss';
.paragraph-flex {
  display: flex;
  flex-flow: flex-wrap;
  align-items: flex-start;
  @include respond('phone') {
    justify-content: center;
    padding-bottom: 1.5rem;
  }
}

.paragraph-heading {
  font-family: 'Dosis', sans-serif;
  font-size: 2rem;
}

.img-container {
  padding-right: 2.5rem;
  padding-bottom: 2.5rem;
}

.content-wrapper {
  padding: 1.5rem 1.5rem 0.8rem 1.5rem;
  margin: 0 3.5rem 3.5rem 3.5rem;
  box-shadow: 0 0.2rem 0.4rem #ccc;
}

@include respond('big-desktop') {
  .content-wrapper {
    width: 120rem;
    margin: auto;
  }
}

@include respond('phone') {
  .img-container {
    padding-right: 0rem;
    padding-bottom: 2rem;
  }
  .content-wrapper {
    padding: 1.5rem 2rem 0.8rem 2rem;
    margin: 0 1rem 2rem 1rem;
    box-shadow: 0 0.2rem 0.4rem #ccc;
  }
}
</style>

