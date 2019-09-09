<template>

    <div class="basketball">
        <div class="images">
            <img :src="img[pos]" alt="basketball court" class="top_image">
        </div>
        <div class="images">
            <img :src="img[pos + 1]" alt="basketball court" class="top_image">
        </div>
        <div class="images">
            <img :src="img[pos + 2]" alt="basketball court" class="top_image">
        </div>
        <div class="images">
            <img :src="img[pos + 3]" alt="basketball court" class="top_image">
        </div>
        <div class="images">
            <img :src="img[pos + 4]" alt="basketball court" class="top_image">
        </div>

        <div class="component_content">
            BASKETBALL {{ second }}
        </div>
    </div>

</template>

<script>
  export default {
    name: 'Basketball',

    data () {
      return {
        second: 0,
        pos: 0,
        img: [
          '../../../../img/basketball/emile-victor-portenart-zjEsQhDD39I-unsplash.jpg',
          '../../../../img/basketball/jc-dela-cuesta-itqkcMEix64-unsplash.jpg',
          '../../../../img/basketball/rosie-yang-6Bc9E0YwGWI-unsplash.jpg',
          '../../../../img/basketball/radek-ijh6OPRrwO8-unsplash.jpg',
          '../../../../img/basketball/yassine-khalfalli-WVv_oO-IQy8-unsplash.jpg',
        ],
      }
    },

    mounted () {
      window.setInterval(() => { this.getMS() }, 2000)
    },

    methods: {
      getMS () {
        let ms = new Date()
        this.second = ms.getMilliseconds()
        this.pos = (this.pos > 1 ? 0 : this.pos + 1)
      },
    },
  }
</script>

<style scoped>
    .images {
        display: inline-block;
    }
</style>
