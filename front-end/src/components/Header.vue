<script>


export default {
    name: "HeaderApp",


}

</script>

<template>
    <header class="p-4">
        <nav>
            <router-link class="link-offset-2 link-underline link-underline-opacity-0 link-secondary"
                :to="{ name: 'landingpage' }">

                <h1 class="fs-3">throjans
                    <i class="fa-solid fa-horse-head mx-2"></i>
                </h1>
            </router-link>







            <div class="dropdown">
                <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-bars"></i>
                </button>
                <ul class="dropdown-menu">
                    <li><button class="dropdown-item" type="button"> <router-link
                                class="link-offset-2 link-underline link-underline-opacity-0 link-secondary font"
                                :to="{ name: 'landingpage' }"><span class="hover-underline">

                                    Home
                                </span></router-link></button></li>
                    <li><button class="dropdown-item" type="button"> <router-link
                                class="link-offset-2 link-underline link-underline-opacity-0 link-secondary font"
                                :to="{ name: 'home' }"><span class="hover-underline">

                                    Progetti
                                </span></router-link></button></li>
                    <li><button class="dropdown-item" type="button"> <router-link
                                class="link-offset-2 link-underline link-underline-opacity-0 link-secondary font"
                                :to="{ name: 'about' }"> <span class="hover-underline">

                                    Chi sono
                                </span></router-link></button></li>

                    <li><button class="dropdown-item" type="button"> <router-link
                                class="link-offset-2 link-underline link-underline-opacity-0 link-secondary font"
                                :to="{ name: 'contact' }"> <span class="hover-underline">

                                    Contatto
                                </span></router-link></button></li>

                </ul>
            </div>



        </nav>
    </header>
</template>


<style scoped>
header {

    height: 15vh;
}

nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 25px;
}

.btn-secondary {
    --bs-btn-color: #000000;
    --bs-btn-bg: rgba(255, 255, 255, 0);
    --bs-btn-border-color: rgba(255, 255, 255, 0);
    font-size: 20px;
}

.btn:hover {
    color: black;
    background-color: rgba(255, 255, 255, 0);
    border-color: rgba(255, 255, 255, 0);
}

.btn-check:checked+.btn,
.btn.active,
.btn.show,
.btn:first-child:active,
:not(.btn-check)+.btn:active {
    color: black;
    background-color: rgba(255, 255, 255, 0);
    border-color: rgba(255, 255, 255, 0);
}
</style>

