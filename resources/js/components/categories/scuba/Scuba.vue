<template>
    <div class="scuba">
        <div class="images_parent">
            <!--            <div class="images">-->
            <img src="../../../../img/scuba/sebastian-pena-lambarri-7i5HMCGupVw-unsplash.jpg" alt="scuba image"
                 class="top_image">
            <!--            </div>-->
            <!--            <div class="images">-->
            <img src="../../../../img/scuba/gerald-schombs-BqySllTmBhk-unsplash.jpg" alt="scuba image"
                 class="top_image">
            <!--            </div>-->
            <!--            <div class="images">-->
            <img src="../../../../img/scuba/me.jpg" alt="me scuba"
                 class="top_image">
            <!--            </div>-->
            <!--            <div class="images">-->
            <img src="../../../../img/scuba/sebastian-pena-lambarri-ld4VubWXTuI-unsplash.jpg" alt="scuba image"
                 class="top_image">
            <!--            </div>-->
            <!--            <div class="images">-->
            <img src="../../../../img/scuba/alexandra-rose-ccWJHxUeM7c-unsplash.jpg" alt="scuba image"
                 class="top_image">
            <!--            </div>-->
        </div>

        <div class="component_content">
            SCUBA
        </div>
    </div>
</template>

<script>
  export default {
    name: 'Scuba'
  }
</script>

<style scoped>
    /*.images {*/
    /*    display: inline-block;*/
    /*    position: relative;*/
    /*    float: left;*/
    /*}*/

    .top_image {
        display: inline;
        margin: 0px;
        padding: 0px;
        vertical-align: middle;
        width: 200px;
    }

    .images_parent {
        display: block;
        margin: 0px;
        padding: 0px;
        position: relative;
        top: 90px;
        height: auto;
        max-width: auto;
        overflow-y: hidden;
        overflow-x: auto;
        word-wrap: normal;
        white-space: nowrap;
    }

    /*.images_parent {*/
    /*    white-space: nowrap;*/
    /*}*/

    /*.row::after {*/
    /*    content: "";*/
    /*    clear: both;*/
    /*    display: table;*/
    /*}*/
</style>
