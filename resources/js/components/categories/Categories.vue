<template>
    <div class="categories">
        <div class="tabs is-toggle is-fullwidth" id="tabs">
            <ul>
                <li class="is-active" data-tab="basketball">
                    <a>
                        <span class="icon is-small"><i class="fas fa-basketball-ball" aria-hidden="true"></i></span>
                        <span>Basketball</span>
                    </a>
                </li>

                <li data-tab="music">
                    <a>
                        <span class="icon is-small"><i class="fas fa-music" aria-hidden="true"></i></span>
                        <span>Music</span>
                    </a>
                </li>

                <li data-tab="scuba">
                    <a>
                        <span class="icon is-small"><img src="../../../images/scuba-sm.png" alt="scuba icon"/></span>
                        <span>Scuba</span> <!-- https://icons8.com/icons/set/scuba -->
                    </a>
                </li>

                <li data-tab="development">
                    <a>
                        <span class="icon is-small"><i class="fas fa-laptop" aria-hidden="true"></i></span>
                        <span>Development</span>
                    </a>
                </li>
            </ul>
        </div>

        <div id="tab-content">
            <p class="is-active" data-content="basketball">
                Basketball
                <basketball></basketball>
            </p>
            <p data-content="music">
                Music
                <music></music>
            </p>
            <p data-content="scuba">
                Scuba
                <scuba></scuba>
            </p>
            <p data-content="development">
                Development
                <development></development>
            </p>
        </div>
    </div>
</template>

<script>
  import basketball from './basketball/Basketball'
  import music from './music/Music'
  import scuba from './scuba/Scuba'
  import development from './development/Development'

  export default {
    name: 'Categories',

    components: {
      basketball,
      music,
      scuba,
      development,
    },
  }

  $(document).ready(function () { // https://stackoverflow.com/questions/47591474/how-to-switch-through-tabs-in-bulma
    $('#tabs li').on('click', function () {
      let tab = $(this).data('tab')
      // alert(tab)
      $('#tabs li').removeClass('is-active')
      $(this).addClass('is-active')
      $('#tab-content p').removeClass('is-active')
      $('p[data-content="' + tab + '"]').addClass('is-active')
    })
  })
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
