<script>
import axios from 'axios';

const API_URL = 'http://localhost:8000/api/v1';

export default {
    name: 'AppHome',
    data() {
        return {
            projects: [],
            image_url: 'http://localhost:8000/storage/',
            image_default: 'http://localhost:8000/storage/'
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

}
</script>

<template>
    <div>
        <h1>Progetti</h1>






        <div v-for="project in projects" :key="project.id">
            <router-link :to="{
                name: 'project-show',
                params: { id: project.id }
            }">
                <h3>{{ project.titolo }}</h3>
            </router-link>

            <img :src="project.immagine ? image_url + project.immagine : '../../public/img/throjans.png'" />
            <span>{{ project.data }}</span>
            <span>{{ project.type.nome }}</span>
        </div>

    </div>
</template>



<style scoped></style>


