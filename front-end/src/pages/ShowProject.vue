<script>
import axios from 'axios';

const API_URL = 'http://localhost:8000/api/v1';

export default {
    name: 'ShowProject',
    data() {
        return {
            project: null,
            image_url: 'http://localhost:8000/storage/',
            image_default: 'http://localhost:8000/storage/'
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
    <div v-if="project">
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
                {{ technology.nome }}
            </li>
        </ul>
    </div>
</template>



<style scoped></style>
