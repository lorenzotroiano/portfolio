<script>
import axios from 'axios';

const API_URL = 'http://localhost:8000/api/v1';

export default {
    name: 'AppHome',
    data() {
        return {
            projects: [],
            image_url: 'http://localhost:8000/storage/',
            image_default: 'http://localhost:8000/storage/',
            activeProjectIndex: null
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
    <div class="project-container  align-self-end">
        <div class="project-images">
            <div class="project-image" v-for="(project, index) in projects" :key="project.id">
                <img class="rounded-end-5" :src="image_url + project.immagine" alt="" v-show="index === activeProjectIndex">
            </div>
        </div>
        <div class="project-titles">
            <h2 class="position-fixed">Progetti <span class="fs-5">({{
                totalProjectsCount }})</span></h2>
            <ul class="">
                <li class="p-3" v-for="(project, index) in projects" :key="project.id"
                    @mouseover="activeProjectIndex = index" @mouseout="activeProjectIndex = null">

                    <router-link class="link-offset-2 link-underline link-underline-opacity-0 text-dark" :to="{
                        name: 'project-show',
                        params: { id: project.id }
                    }">
                        <div class="d-flex align-items-center justify-content-between">
                            <h3 class=""> {{
                                project.titolo }}</h3>
                            <span>{{ project.type.nome }}</span>
                        </div>


                    </router-link>
                </li>
            </ul>
        </div>
    </div>
</template>



<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Pixelify+Sans&display=swap');

img {
    object-fit: cover;
    /* height: 100%; */
    /* width: 100%; */

    width: 700px;
    height: 554px;

}

h2 {
    position: relative;
    top: 220px;
    /* background-color: #8C52FF; */
    width: 34%;
    padding: 10px;
    /* color: white; */


    font-family: 'AR One Sans', sans-serif;
    font-size: 37px;
    letter-spacing: 10px;

}



.project-container {
    width: 85%;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-direction: row;
    height: 85vh;

    align-items: end;


}

.project-images {
    /* flex: 1; */
    display: flex;
    flex-direction: column;
    align-items: center;

    width: 55%;

    height: 80%;
}

.project-image {}

.project-titles {
    /* flex: 1; */
    display: flex;
    flex-direction: column;
    justify-content: center;
    width: 40%;


    height: 80%;
    /* overflow: auto; */
    overflow: auto;
    scrollbar-width: none;


}

.project-titles::-webkit-scrollbar {
    width: 0;
    /* Nasconde la scrollbar in WebKit (Chrome, Safari, etc.) */
}





.project-titles ul {
    list-style: none;
    padding: 0;
    margin: 0;

    height: 80%;

}

.project-titles li {
    /* margin-top: 80px; */
    cursor: pointer;


    border-top: 1px solid #8C52FF;
    border-bottom: 1px solid #8C52FF;


    /* background: rgba(254, 204, 171, 0.3); */
    font-family: 'Source Code Pro', monospace;
    letter-spacing: 3px;


}

.project-titles li:hover {
    font-weight: bold;
}
</style>


