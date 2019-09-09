<template>
    <div class="categories">
        <!-- TODO: Change tabs to not be scrollable on mobile view but dropdown instead -->
        <div class="tabs is-toggle is-fullwidth" id="tabs">
            <ul>
                <li v-bind:class="{ 'is-active': selected_tab === 'basketball' }" @click="selected_tab = 'basketball'"
                    data-tab="basketball">
                    <a>
                        <span class="icon is-small"><i class="fas fa-basketball-ball" aria-hidden="true"></i></span>
                        <span>Basketball</span>
                    </a>
                </li>

                <li v-bind:class="{ 'is-active': selected_tab === 'music' }" @click="selected_tab = 'music'"
                    data-tab="music">
                    <a>
                        <span class="icon is-small"><i class="fas fa-music" aria-hidden="true"></i></span>
                        <span>Music</span>
                    </a>
                </li>

                <li v-bind:class="{ 'is-active': selected_tab === 'scuba' }" @click="selected_tab = 'scuba'"
                    data-tab="scuba">
                    <a>
                        <span class="icon is-small"><img src="../../../img/icons/scuba-sm.png" alt="scuba icon"/></span>
                        <span>Scuba</span> <!-- https://icons8.com/icons/set/scuba -->
                    </a>
                </li>

                <li v-bind:class="{ 'is-active': selected_tab === 'development' }" @click="selected_tab = 'development'"
                    data-tab="development">
                    <a>
                        <span class="icon is-small"><i class="fas fa-laptop" aria-hidden="true"></i></span>
                        <span>Development</span>
                    </a>
                </li>
            </ul>
        </div>

        <!-- TODO: Add carousel of img at the top of each component -->
        <div id="tab-content"> <!-- https://siongui.github.io/2018/01/26/vuejs-bulma-tabs/ -->
            <div v-show="selected_tab === 'basketball'">
                <basketball></basketball>
            </div>
            <div v-show="selected_tab === 'music'">
                <music></music>
            </div>
            <div v-show="selected_tab === 'scuba'">
                <scuba></scuba>
            </div>
            <div v-show="selected_tab === 'development'">
                <development></development>
            </div>
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

    data () {
      return { selected_tab: 'basketball', }
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
