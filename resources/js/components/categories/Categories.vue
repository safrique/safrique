<template>
    <div class="categories">
        <div class="tabs is-toggle">
            <ul>
                <li class="is-active">
                    <a>
                        <span class="icon is-small"><i class="fas fa-basketball-ball" aria-hidden="true"></i></span>
                        <span>Basketball</span>
                    </a>
                </li>
                <li>
                    <a>
                        <span class="icon is-small"><i class="fas fa-music" aria-hidden="true"></i></span>
                        <span>Music</span>
                    </a>
                </li>
                <li>
                    <a>
                        <span class="icon is-small"><img src="../../../images/scuba-sm.png"/></span>
                        <span>Scuba</span>
                    </a>
                </li>
                <li>
                    <a>
                        <span class="icon is-small"><i class="fas fa-laptop" aria-hidden="true"></i></span>
                        <span>Development</span>
                    </a>
                </li>
            </ul>
        </div>

        <view-router></view-router>
    </div>
</template>

<script>
  export default {
    name: 'Categories'
  }
</script>

<style scoped>

</style>
