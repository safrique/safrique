<template>
    <div class="basketball">
        <div class="images" v-for="image in images">
            <!--            <img :src="image.link" alt="basketball court" class="top_image" @load="setImgWidth" :ref="image.title">-->
            <img :src="image.link" alt="basketball court" class="top_image" :id="image.title" :ref="image.title">
            <!--            image.width: {{image.width}} => image: {{image}} => getImgWidth: {{getImgWidth}}-->
            <div>
                <button @click="getWidth(image.title)">{{image.title}}</button>
                <br>
                image.width={{image.width}}
            </div>
        </div>

        <button @click="setImgWidths">setWidths</button>

        <!--        <div class="images" v-for="image in i">-->
        <!--            <img :src="image.img" alt="basketball court" class="top_image">-->
        <!--        </div>-->

        <!--        <div v-for="image in images_array">-->
        <!--            {{image.img}}-->
        <!--        </div>-->

        <div class="component_content">
            BASKETBALL {{ second }} this is for testing
        </div>
    </div>
</template>

<script>
  import BB0 from '../../../../img/basketball/emile-victor-portenart-zjEsQhDD39I-unsplash.jpg'
  import BB1 from '../../../../img/basketball/jc-dela-cuesta-itqkcMEix64-unsplash.jpg'
  import BB2 from '../../../../img/basketball/rosie-yang-6Bc9E0YwGWI-unsplash.jpg'
  import BB3 from '../../../../img/basketball/radek-ijh6OPRrwO8-unsplash.jpg'
  import BB4 from '../../../../img/basketball/yassine-khalfalli-WVv_oO-IQy8-unsplash.jpg'

  export default {
    name: 'Basketball',

    data () {
      return {
        second: 0,
        pos: 0,
        images: [
          { title: 'bb0', link: BB0, width: 0 },
          { title: 'bb1', link: BB1, width: 0 },
          { title: 'bb2', link: BB2, width: 0 },
          { title: 'bb3', link: BB3, width: 0 },
          { title: 'bb4', link: BB4, width: 0 },
        ],
        // img: [BB0, BB1, BB2, BB3, BB4],
        // i: [
        //   { title: 'bb0', img: require('../../../../img/basketball/emile-victor-portenart-zjEsQhDD39I-unsplash.jpg') },
        //   { title: 'bb1', img: require('../../../../img/basketball/jc-dela-cuesta-itqkcMEix64-unsplash.jpg') },
        //   { title: 'bb2', img: require('../../../../img/basketball/rosie-yang-6Bc9E0YwGWI-unsplash.jpg') },
        //   { title: 'bb3', img: require('../../../../img/basketball/radek-ijh6OPRrwO8-unsplash.jpg') },
        //   { title: 'bb4', img: require('../../../../img/basketball/yassine-khalfalli-WVv_oO-IQy8-unsplash.jpg') },
        // ],
        // width: 0,
      }
    },

    mounted () {
      // window.setInterval(() => { this.getMS() }, 2000)

      // setInterval(() => {this.setImgWidths()}, 2000)
      // this.$nextTick(() => {
      //   console.log(this.images)
      //   this.setImgWidths()
      // })

      console.log(`refs mounted:`, this.$refs)
      this.setImgWidths()
    },

    computed: {
      images_array () {
        let img = []
        for (let i = 0, j = this.images.length; i < j; i++) {
          img.push({ id: i, img: `<img src="${this.images[i].link}" id="${this.images[i].title}">` })
        }
        return img
      },

      // getImgWidth(id) {
      //   // let img = event.target;
      //   // // this.width = img.clientWidth;
      //   // let width = img.clientWidth
      //   // console.log(`get => img:`, img, `width=${width}`)
      //   // return width
      //   // return document.getElementById(id).clientWidth
      //   return this.$refs.id.clientWidth
      // },
    },

    methods: {
      getMS () {
        let ms = new Date()
        this.second = ms.getMilliseconds()
        this.pos = (this.pos > 1 ? 0 : this.pos + 1)
      },

      setImgWidth (event) {
        console.log(event)
        let img = event.target
        // this.width = img.clientWidth;
        let width = img.clientWidth
        console.log(`set => img:`, img, `width=${width}`)
        // console.log(`image:`, image)
        // console.log(`obj:`, obj)
        // console.log(this)
        // img.width = img.clientWidth;
        // return img.clientWidth
      },

      setImgWidths () {
        // let img = event.target;
        // // this.width = img.clientWidth;
        // let width = img.clientWidth
        // console.log(`get => img:`, img, `width=${width}`)
        // return width
        // return document.getElementById(id).clientWidth
        // return this.$refs.id.clientWidth

        // console.log(`refs1:`, this.$refs)

        // https://stackoverflow.com/questions/44948714/get-element-height-with-vuejs
        // https://stackoverflow.com/questions/45563329/how-to-add-dynamic-ref-in-vue-js
        for (let i = 0, j = this.images.length; i < j; i++) {
          let id = this.images[i].title
          // console.log(`id=${id} => ref[${i}]: ${this.$refs[i]} => elem:`, document.getElementById(id))
          // let width = document.getElementById(id).clientWidth
          // let width = this.$refs[i].clientWidth
          // console.log(`id=${id} => width=${width} => elem:`, document.getElementById(id))
          console.log(`id=${id}`, this.$refs[id], this.$refs[id][0])
          console.log(`id=${id} => width=${this.$refs[id][0].clientWidth}`)
          // this.images[i].width = this.$refs[id].clientWidth
          // console.log(this.$refs.(this.images[i].title).clientWidth)
          // this.images[i].width = width
        }

        // console.log(`refs2:`, this.$refs)
      },

      getWidth (id) {
        alert(document.getElementById(id).clientWidth)
      },
    },
  }
</script>

<style scoped>
    .images {
        display: inline-block;
    }
</style>
