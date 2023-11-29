<script>
import axios from 'axios';

const API_URL = 'https://localhost:8000/api/v1';

export default {
    name: 'ShowProject',
    data() {
        return {
            project: null,
            image_url: 'https://localhost:8000/storage/',
            image_default: 'https://localhost:8000/storage/'
        }
    },
    mounted() {

        const projectId = this.$route.params.id;

        axios.get(API_URL + '/projects/' + projectId)
            .then(res => {

                const data = res.data;
                this.project = data.project;


            })
            .catch(err => console.error(err));

    },
}

</script>

<template>
    <router-link class="link-offset-2 link-underline link-underline-opacity-0 link-secondary position-fixed"
        :to="{ name: 'home' }">

        <i class="fa-solid fa-arrow-right fa-rotate-180 rounded-start-pill p-2 text-white"></i>


    </router-link>
    <div class="container">

        <div class=" row justify-content-center align-items-start position-elastico">
            <div v-if="project" class="col-sm-8 py-4 p-lg-0 col-lg-8">
                <img class="img-fluid"
                    :src="project.immagine ? image_url + project.immagine : '../../public/img/throjans.png'" />

                <div class="row row-cols-3 align-items-center border-bottom border-black my-4">
                    <h1 class="titolo">{{ project.titolo }}</h1>
                    <h4 class="text-center type">{{ project.type.nome }}</h4>
                    <span class="text-end type">{{ project.anno }}</span>
                </div>


                <div class="row my-2 p-1">
                    <div class="col-lg-6 text-start border-descrizione">
                        <p class="">{{ project.descrizione }}</p>
                    </div>
                    <div class="col text-center ps-3">
                        <!-- <h4>Tecnologie usate:</h4> -->
                        <ul class="row row-cols-lg-3 list-unstyled">
                            <li class="col p-lg-1 my-2 technology" v-for="technology in project.technologies"
                                :key="technology.id">
                                {{ technology.nome }} - <i :class="technology.icona"></i>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <div v-if="project">
        <h1>Project: {{ project.titolo }}</h1>
        <img :src="project.immagine ? image_url + project.immagine : '../../public/img/throjans.png'" />
        <p>{{ project.descrizione }}</p>
        <div class="row mb-4 mt-2">
            <span class="col">{{ project.data }}</span>

        </div>
        <h4><b>Type:</b> {{ project.type.nome }}</h4>
        <h4>Technologies:</h4>
        <ul>
            <li v-for="technology in project.technologies" :key="technology.id">
                {{ technology.nome }} - <i :class="technology.icona"></i>
            </li>
        </ul>
    </div> -->
</template>



<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Pixelify+Sans&display=swap');

.fa-rotate-180 {

    background: rgb(255, 0, 0);
}

.titolo {
    color: white;
    -webkit-text-stroke-width: 1px;
    /* Larghezza del contorno nero */
    -webkit-text-stroke-color: black;
    /* Colore del contorno nero */
    /* text-stroke-width: 2px;
    text-stroke-color: black; */
    font-family: 'AR One Sans', sans-serif;
    font-size: 45px;

}

.type {
    color: rgb(55, 40, 40);
    font-family: 'Source Code Pro', monospace;

    font-size: 28px;
}

.technology {
    color: rgb(55, 40, 40);
    font-family: 'Source Code Pro', monospace;

    font-size: 16px;

    transition: all 0.8s;
}

.technology:hover {
    letter-spacing: -1px;
}

.position-elastico {
    margin-top: -130px;
    margin-bottom: 30px;
}

.border-descrizione {
    border-right: 1px solid black;
}

@media (max-width: 812px) {


    .position-elastico {
        margin-top: 0px;
        /* margin-bottom: 30px; */
    }

    .titolo {

        font-size: 21px;

    }

    .type {


        font-size: 14px;
    }

    .technology {


        font-size: 14px;


    }

    .border-descrizione {
        border-bottom: 1px solid black;
        border-right: 0px solid black;
    }


}
</style>
