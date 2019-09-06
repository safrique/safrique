<template>
    <nav class="navbar is-black is-fixed-top" role="navigation" aria-label="main navigation">
        <div id="vue_navbar" class="navbar-menu">
            <div class="navbar-start">
                <a class="navbar-item" href="/">
                    <span class="icon"><i class="fa fa-home" aria-hidden="true"></i></span>
                </a>

                <a class="navbar-item" href="/categories">Categories</a>

                <div class="navbar-item has-dropdown is-hoverable">
                    <a class="navbar-link">More</a>

                    <div class="navbar-dropdown">
                        <a class="navbar-item" href="/about">About</a>
                        <a class="navbar-item" href="/site-layout">Site layout</a>
                    </div>
                </div>
            </div>

            <div class="navbar-end">
                <div class="navbar-item">
                    <div class="buttons">
                        <button class="button is-primary unfinished" id="vue_signup_btn"><strong>Sign up</strong>
                        </button>

                        <button class="button is-warning unfinished" id="vue_login_btn">Log in</button>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</template>

<script>
  export default {
    name: 'Navbar'
  }

  $(document).ready(function () { // https://stackoverflow.com/questions/47591474/how-to-switch-through-tabs-in-bulma
    $('.unfinished').on('click', function () {
      let item = `#${this.id}`
      alert(`${$(item).prop('nodeName')} (${item}) not yet set up`)
    })
  })
</script>

<style scoped>

</style>
