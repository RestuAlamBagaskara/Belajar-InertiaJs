<template>
    <div>
        <Head>
            <title>
                {{ title }}
            </title>
        </Head>
    </div>
    <div>
        <ul>
            <li>
                <h2>{{ user.name }}</h2>
                <p>{{ user.email }}</p>
                <p>{{ user.created_at }}</p>
                <Link href="/users/">Kembali</Link>
                <Link href="/users/" @click.prevent="deleteUser">Delete</Link>
                <Link :href="`/users/${user.id}/edit`">Edit</Link>
            </li>
        </ul>
    </div>
</template>

<script>
    import { Head } from "@inertiajs/inertia-vue3";
    import { Link } from "@inertiajs/inertia-vue3";

    export default {
        components: {
            Head, 
            Link
        },

        props: {
            title: String,
            user: Object
        },

        methods: {
            deleteUser() {
                if(confirm("Hapus Data User?")){
                    this.$inertia.delete('/users/' + this.user.id)
                }
                else{
                    return false
                }
            }
        },
    }
</script>