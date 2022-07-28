<template>
    <Head>
        <title>Halaman About</title>
    </Head>
    <Layout>
        <h1>About</h1>
        <p>Hello my name is {{ name }}. I'm {{ age }} years old</p>
    </Layout>
</template>

<script>
    import Layout from '../Layout/Layout.vue';  
    import { Head } from '@inertiajs/inertia-vue3'

    export default {
    components : {
        Layout,
        Head
    },

    props: [
        "name",
        "age"
    ],
    components: { Layout }
}

</script>