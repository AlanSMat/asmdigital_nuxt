<template>
  <div>
    <div class="layer-wrapper" id="app">
      <div class="display-flex">
        <div class="pf-card" v-bind:key="listItem.id" v-for="listItem in portfolio">
          <div class="pf-card__body">
            <img :src="listItem.img" width="220" alt="Project" class="object-fit_fill" />
            <a :href="listItem.href" class="btn-light">
              <div class="pf-caption">
                <i class="fas fa-eye"></i>
                {{ listItem.title }}
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ['portfolio'],
  name: 'Portfolio'
}
</script>
<style lang="scss" scope>
.pf-card {
  border: 1px solid #f0f0f0;
  align-self: flex-start;
  background-color: #fff;
  margin: 0 2.5rem 5.5rem 2.5rem;
}
.pf-card__body {
  width: 35rem;
  box-shadow: 0 0.2rem 0.2rem rgba(0, 0, 0, 0.15);
}
.pf-caption {
  background-color: #536f98;
  color: #ccc;
  padding: 0.5em;
}
.pf-caption:hover {
  background-color: #ccc;
  color: #212121;
}
</style>

