<template>
    <nav class="navbar is-black is-fixed-top" role="navigation" aria-label="main navigation">
        <div id="navbarBasicExample" class="navbar-menu">
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
                        <a class="button is-primary"><strong>Sign up</strong></a>
                        <a class="button is-warning">Log in</a>
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
</script>

<style scoped>

</style>
