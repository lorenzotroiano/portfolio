<script>
import axios from 'axios';

const API_URL = 'https://api.throjans.com/api/v1';

export default {
    name: 'AppHome',
    data() {
        return {
            projects: [],
            immagine_url: 'https://throjans.com/storage/',
            immagine_default: 'https://throjans.com/storage/',

        }
    },
    methods: {

        getProjects() {
            axios.get(API_URL)
                .then(res => {
                    const data = res.data;
                    this.projects = data.projects;
                })
                .catch(err => console.error(err));
        }
    },
    mounted() {
        this.getProjects();

    },
    computed: {
        totalProjectsCount() {
            return this.projects.length;
        }
    }

}
</script>

<template>
    <h1 class="pb-3 d-flex align-items-start justify-content-center">I miei progetti
        <small class="fs-5 mt-1">({{ totalProjectsCount }})</small>
    </h1>

    <section class="section-fant container-fluid">
        <div class="m-auto" style="width: 90%;">

            <div v-for="project in  projects " :key="project.id" class="py-4">

                <div class="card bg-body-tertiary p-1 shadow rounded-end-5 ">
                    <div class="row row-cols-sm-1 row-cols-lg-2 g-0">
                        <div class="col-lg-7 overfl-y-auto" style="height: 450px;">
                            <router-link class="" :to="{ name: 'project-show', params: { id: project.id } }"> <img
                                    :src="immagine_url + project.immagine" class="img-fluid rounded-start"
                                    alt="Project Image"></router-link>

                        </div>
                        <div class="col-lg-5 p-5 bg-immagine">
                            <div class="card-body padding-cards text-center">
                                <h3 class="card-title text-uppercase">{{ project.titolo }}</h3>

                                <span class="card-text"><strong>Pubblicato:</strong> {{ project.anno }}</span><br><br>
                                <span class="card-text"><strong>Tipologia:</strong> {{ project.type.nome }}</span>

                                <div class="d-flex justify-content-evenly pt-5">

                                    <!-- QUI DEVO INSERIRE IL LINK DEL PROGETTO PRESENTE SU GITHUB -->
                                    <a class="btn btn-primary" :href="project.link" target="_blank"><i
                                            class="fas fa-code"></i>
                                        Code</a>

                                    <!-- <a class="btn btn-secondary" href="#"><i class="fas fa-eye"></i> Details</a> -->

                                    <router-link class="" :to="{ name: 'project-show', params: { id: project.id } }"> <a
                                            class="btn btn-secondary" href="#"><i class="fas fa-eye"></i>
                                            Details</a></router-link>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</template>



<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Pixelify+Sans&display=swap');

.bg-immagine {
    background-image: url(../../public/img/1575.jpg);
    border-radius: 22px;
    background-repeat: no-repeat;



    background-size: 400%;

}

.card {
    transition: all 1s;
    /* opacity: 0.75; */
}

h3 {
    -webkit-text-stroke-width: 1px;
    /* Larghezza del contorno nero */
    -webkit-text-stroke-color: black;
    /* Colore del contorno nero */
    /* text-stroke-width: 2px;
    text-stroke-color: black; */
    font-family: 'AR One Sans', sans-serif;
    font-size: 37px;
    color: white;

    /* letter-spacing: 7px; */
}

span {
    color: rgb(0, 0, 0);
    font-family: 'AR One Sans', sans-serif;
    font-size: 22px;
}

.padding-cards {
    padding: 45px;
}

@media (max-width: 812px) {



    h3 {
        font-size: 20px;
    }

    span {
        font-size: 17px;
    }

    .padding-cards {
        padding: 0px;
    }

    a {
        font-size: 15px;
    }
}

.section-fant {

    height: 75vh;
    overflow-y: auto;
    scrollbar-width: thin;
    /* Nasconde la scrollbar in Firefox */
    scrollbar-color: transparent transparent;
    /* Nasconde la scrollbar in Firefox */
    -ms-overflow-style: none;
    /* Nasconde la scrollbar in IE/Edge */
    scrollbar-width: none;
    /* Nasconde la scrollbar in Webkit (Chrome, Safari) */
}

.section-fant::-webkit-scrollbar {
    width: 6px;
    /* Larghezza della scrollbar */
}

.overfl-y-auto {
    overflow-y: hidden;
    scrollbar-width: thin;
    /* Nasconde la scrollbar in Firefox */
    scrollbar-color: transparent transparent;
    /* Nasconde la scrollbar in Firefox */
    -ms-overflow-style: none;
    /* Nasconde la scrollbar in IE/Edge */
    scrollbar-width: none;
    /* Nasconde la scrollbar in Webkit (Chrome, Safari) */
}

/* Nasconde la scrollbar in Webkit (Chrome, Safari) */
.overfl-y-auto::-webkit-scrollbar-thumb {
    background: transparent;
    /* Colore della scrollbar */
}

.section-fant::-webkit-scrollbar {
    width: 6px;
    /* Larghezza della scrollbar */
}

.overfl-y-auto::-webkit-scrollbar {
    width: 6px;
    /* Larghezza della scrollbar */
}

.overfl-y-auto::-webkit-scrollbar-thumb {
    background: transparent;
}

img {

    opacity: 0.75;
    transition: all 1s;
}

/* img:hover {
    opacity: 1;
} */

.card:hover,
img:hover {
    letter-spacing: 3px;
    opacity: 1;

}
</style>


