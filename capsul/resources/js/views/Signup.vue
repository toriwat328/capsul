<template>
<div class="signupcontainer">
    <SimpleNav />
    <div class="signupbody">

        <div class="sigupbox">

            <h2>Sign Up</h2>
        <form action="#" @submit.prevent="register">

            <div class="form-control2">
            <label for="name">Name</label>
            <input type="name" name="name" id="name" class="login-input2" v-model="name">
            </div>

            <div class="form-control2">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="login-input2" v-model="email">
            </div>

            <div class="form-control2">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="login-input2" v-model="password">
            </div>

            <div class="form-control2">
            <button type="submit" class="btn-submit">Login</button>
            </div>
        </form>

        </div>

    </div>
</div>
</template>

<script>
    import SimpleNav from './SimpleNav.vue'

    export default {
        components: {
            SimpleNav
        },
        data (){
            return {
                name: '',
                email: '',
                password: ''
            }
        },
        methods: {
            register(){
                return new Promise((resolve, reject) => {
                axios.post('/api/register', {
                    name: this.name,
                    email: this.email,
                    password: this.password
                })
                .then(response => {

                    this.$router.push('/login');
                    resolve(response);
                })
                .catch(error => {
                    reject(error);
                })
            })
            }
        },
        mounted() {

        }
    }
</script>
