<template>
    <div>
        <h1>Update</h1>
        <form @submit.prevent="update">
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
            <button type="submit">Update</button>
        </form>
    </div>
</template>

<script>

    export default {

        props: {
            errors: Object,
            user: Object
        },

        data() {
            return {
                form: {
                    name : this.user.name,
                    email : this.user.email,
                }
            }
        },

        methods: {
            update() {
                this.$inertia.put("/users/" + this.user.id, this.form)
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