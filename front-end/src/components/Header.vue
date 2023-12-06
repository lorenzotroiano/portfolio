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
                    <i class="fa-solid fa-horse-head mx-2 "></i>
                </h1>
            </router-link>







            <div class="dropdown">
                <button class="btn btn-secondary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa-solid fa-bars link-secondary"></i>
                </button>
                <ul class="dropdown-menu">
                    <router-link class="link-offset-2 link-underline link-underline-opacity-0 "
                        :to="{ name: 'landingpage' }">
                        <li><button class="dropdown-item" type="button"><span class="hover-underline link-secondary">

                                    Home
                                </span>
                            </button></li>
                    </router-link>


                    <router-link class="link-offset-2 link-underline link-underline-opacity-0 " :to="{ name: 'home' }">
                        <li><button class="dropdown-item" type="button"> <span class="hover-underline link-secondary">

                                    Progetti
                                </span>
                            </button></li>
                    </router-link>


                    <router-link class="link-offset-2 link-underline link-underline-opacity-0 " :to="{ name: 'about' }">
                        <li><button class="dropdown-item" type="button"> <span class="hover-underline link-secondary">

                                    Chi sono
                                </span>
                            </button></li>
                    </router-link>

                    <router-link class="link-offset-2 link-underline link-underline-opacity-0 " :to="{ name: 'contact' }">
                        <li><button class="dropdown-item" type="button"> <span class="hover-underline link-secondary">

                                    Contatto
                                </span>
                            </button></li>
                    </router-link>

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

.dropdown-menu {
    --bs-dropdown-link-active-bg: rgba(254, 204, 171, 0.3);
}

.span-gray {
    color: goldenrod;
}
</style>

