<template>
    <Head title="Halaman Home"/>
    <Layout>
        <h1>Hello, {{ title }}</h1>
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
            "title"
        ]
    }
</script>