<template>
    <Layout>
        <h1>Register User</h1>
        <form @submit.prevent="register">
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="" id="" v-model="form.name">
                <p v-if="errors.name" class="error">{{ errors.name }}</p>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" name="" id="" v-model="form.email">
                <p v-if="errors.email" class="error">{{ errors.email }}</p>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" name="" id="" v-model="form.password">
                <p v-if="errors.password" class="error">{{ errors.password }}</p>
            </div>
    
            <button type="submit">Register</button>
        </form>
    </Layout>
</template>

<script>
    import Layout from '../../Layout/Layout.vue';  

    export default {
        components: {
            Layout
        },

        props: {
            errors: Object
        },

        data() {
            return {
                form: {
                    name : "",
                    email : "",
                    password : "",
                }
            }
        },

        methods: {
            register() {
                this.$inertia.post("/users", this.form)
            }
        },
    }

</script>

<style>
    .form-group {
        margin-bottom: 5px;
    }
    .error {
        color: red;
        display: inline;
        margin-left: 10px;
        font-weight: bolder;
    }
</style>