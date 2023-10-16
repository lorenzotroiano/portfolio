<script>



export default {
    name: 'LandingPage',
    components: {

    }
}

</script>

<template>
    <main class="position-relative">
        <div class="position-absolute top-50 start-50 translate-middle mb-5 pb-5">
            <div class="">
                <div class="row text-center">
                    <h1 class=" text-white outline-black text-uppercase">
                        Ciao, io sono
                        <span class="name outline-peach">Lorenzo
                            Troiano
                        </span>
                        <br>

                        ma puoi chiamarmi

                        <span class="name">
                            throjans
                        </span>
                    </h1>

                    <span class="fs-5">Sono uno Jr. Full Stack Developer</span>

                    <div class="row py-3 justify-content-center">

                        <div class="col-lg-5">

                            <router-link class="link-offset-2 link-underline link-underline-opacity-0 link-secondary font"
                                :to="{ name: 'home' }"><span class="hover-underline">
                                    <i class="fa-solid fa-arrow-right"></i>
                                    visita i miei progetti
                                </span>
                            </router-link>
                        </div>
                        <div class="col-lg-3 pt-3 pt-lg-0">
                            <router-link class="link-offset-2 link-underline link-underline-opacity-0 link-secondary font"
                                :to="{ name: 'about' }"> <span class="hover-underline">
                                    <i class="fa-solid fa-arrow-right"></i>
                                    chi sono
                                </span>
                            </router-link>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</template>


<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Pixelify+Sans&display=swap');

main {
    height: calc(100vh - 15vh);
}


/* Stile per l'interno del testo */
.text-white {
    color: white;
}

/* Stile per il contorno nero */
.outline-black {
    -webkit-text-stroke-width: 1px;
    /* Larghezza del contorno nero */
    -webkit-text-stroke-color: black;
    /* Colore del contorno nero */
    /* text-stroke-width: 2px;
    text-stroke-color: black; */
    font-family: 'AR One Sans', sans-serif;
    font-size: 35px;
}

.name {
    color: rgb(55, 40, 40);
    font-family: 'AR One Sans', sans-serif;
    font-size: 45px;
}

@media (max-width: 812px) {

    .outline-black {
        -webkit-text-stroke-width: 1px;
        /* Larghezza del contorno nero */
        -webkit-text-stroke-color: black;
        /* Colore del contorno nero */
        /* text-stroke-width: 2px;
    text-stroke-color: black; */
        font-family: 'AR One Sans', sans-serif;
        font-size: 25px;
    }

    .name {

        font-size: 34px;
    }
}


.font {

    font-family: 'Source Code Pro', monospace;
    font-size: 17px;
}

i {
    margin: 0 5px 0 10px;
}

.hover-underline {
    text-decoration: none;
    /* Rimuovi la sottolineatura predefinita */
    position: relative;
}

.hover-underline::before {
    content: "";
    position: absolute;
    width: 100%;
    height: 2px;
    /* Altezza della linea sottolineata */
    bottom: 0;
    left: 0;
    background-color: gray;
    /* Colore della linea */
    transform: scaleX(0);
    /* Inizia con la larghezza zero */
    transform-origin: bottom right;
    transition: transform 0.2s ease-in-out;
}

.hover-underline:hover::before {
    transform: scaleX(1);
    /* Espandi la larghezza quando il cursore è sopra */
    transform-origin: bottom left;
}

/* Stile per il testo grande */
</style>
