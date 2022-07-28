<template>
    <Head>
        <title>
            {{ title }}
        </title>
    </Head>
    <Layout>
        <div v-if="$page.props.flash.message" class="alert">
            {{ $page.props.flash.message }}
        </div>
        <h1>Daftar User</h1>
        <Link href="/register" as="button">Register</Link>
        <ul>
            <li v-for="user in users">
                <p class="detail">{{ user.name }} --</p>
                <Link :href="`/users/${user.id}`"> Lihat User</Link>
            </li>
        </ul>
    </Layout>
</template>

<script>

    import Layout from '../../Layout/Layout.vue';  
    import { Head } from "@inertiajs/inertia-vue3";
    import { Link } from "@inertiajs/inertia-vue3";

    export default {
        components: {
            Layout,
            Head, 
            Link
        },
        props:{
            title : String,
            users : Array
        }
    }
</script>

<style>
    .alert {
        background-color: green;
        color: aliceblue;
        max-width: 2000x;
    }
    .detail {
        display: inline;
        margin-right: 5px;
    }
</style>