<template>
    Qui vanno i progetti.


    <ul>
        <li v-for="project in projects" :key="project.id">

            {{ project.titolo }} - {{ project.data }} - {{ project.type }} - {{ project.technologies }}

        </li>
    </ul>
</template>

<script>


import axios from 'axios';

const API_URL = 'http://localhost:8000/api/v1';

export default {
    name: 'AppHome',
    data() {
        return {
            projects: [],

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
    }
}
</script>
