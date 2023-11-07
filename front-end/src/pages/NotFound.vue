<template>
    <div class="notFound">
        <h2>Che succede amico? Non puoi accedere a questa pagina, clicca <router-link
                :to="{ name: 'landingpage' }">qui</router-link> per tornare alla pagina principale.

        </h2>
    </div>
</template>

<style scoped>
.notFound {
    width: 70%;
    margin: 190px auto;
}


@media (max-width: 812px) {

    .notFound {
        width: 90%;
        margin: 190px auto;
    }
}
</style>
