<template>
    <div class="categories">
        <div class="tabs is-toggle is-fullwidth">
            <ul>
                <li class="is-active">
                    <!--                    <a href="/categories/basketball">-->
                    <a>
                        <span class="icon is-small"><i class="fas fa-basketball-ball" aria-hidden="true"></i></span>
                        <span>Basketball</span>
                    </a>
                    <!--                    <slot></slot>-->
                    <basketball></basketball>
                </li>

                <li>
                    <a>
                        <span class="icon is-small"><i class="fas fa-music" aria-hidden="true"></i></span>
                        <span>Music</span>
                    </a>
                    <music></music>
                </li>

                <li>
                    <a>
                        <span class="icon is-small"><img src="../../../images/scuba-sm.png"/></span>
                        <span>Scuba</span> <!-- https://icons8.com/icons/set/scuba -->
                    </a>
                    <scuba></scuba>
                </li>

                <li>
                    <a>
                        <span class="icon is-small"><i class="fas fa-laptop" aria-hidden="true"></i></span>
                        <span>Development</span>
                    </a>
                    <development></development>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
  $(document).ready(function() {
    $('#tabs li').on('click', function() {
      var tab = $(this).data('tab');

      $('#tabs li').removeClass('is-active');
      $(this).addClass('is-active');

      $('#tab-content p').removeClass('is-active');
      $('p[data-content="' + tab + '"]').addClass('is-active');
    });
  });

  import basketball from './basketball/Basketball'
  import music from './music/Music'
  import scuba from './scuba/Scuba'
  import development from './development/Development'

  // Vue.component('basketball', require('./basketball/Basketball').default)
  // Vue.component('basketball', basketball)
  // Vue.component('music', music)
  // Vue.component('scuba', scuba)
  // Vue.component('development', development)

  export default {
    name: 'Categories',

    // created () {
    //   // console.log(Vue.$data.message)
    // },

    components: {
      basketball,
      music,
      scuba,
      development,
    },
  }
</script>

<style scoped>
    .categories {
        margin-left: 1em;
        margin-right: 1em;
    }

    #tab-content p {
        display: none;
    }

    #tab-content p.is-active {
        display: block;
    }
</style>
