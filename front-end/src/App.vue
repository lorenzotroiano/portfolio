<template>
    <Header> </Header>

    <router-view></router-view>
</template>

<script>

import Header from './components/Header.vue';


export default {

    name: 'App',
    components: {

        Header
    },

}
</script>


<style lang="scss">
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
</style>
