<template>
    <!-- TODO: Make sticky at the bottom of the page -->
    <!-- https://css-tricks.com/couple-takes-sticky-footer/ -->
    <div class=" footer vue-footer footer has-text-centered" id="vue_footer">
        <div>
            <div class="built-with">
                Built with <a href="https://vuejs.org/" target="_blank">Vue.js</a>
                <a href="https://vuex.vuejs.org/" target="_blank">VueX</a>
                <a href="https://router.vuejs.org" target="_blank">Vue Router</a>
                <a href="https://bulma.io/" target="_blank">Bulma</a>
                &amp; <a href="https://jquery.com/">JQuery</a> on top of
                <a href="https://laravel.com/">Laravel</a>
            </div>
        </div>
    </div>
</template>

<script>
  export default {
    name: 'Footer'
  }
</script>

<style scoped>
    a {
        font-style: italic;
    }
</style>
