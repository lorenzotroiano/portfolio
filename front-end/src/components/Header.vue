<script>

export default {
    name: "HeaderApp",
}

</script>

<template>
    <header>
        <nav>
            <router-link class="link-offset-2 link-underline link-underline-opacity-0 link-secondary"
                :to="{ name: 'landingpage' }">

                <h1>throjans <i class="fa-solid fa-laptop mx-2">

                    </i></h1>
            </router-link>
            <a href="http://127.0.0.1:8000/login">Login</a>



        </nav>
    </header>
</template>


<style scoped>
header {
    /* background-color: violet; */
    height: 15vh;



}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 25px;
}
</style>

