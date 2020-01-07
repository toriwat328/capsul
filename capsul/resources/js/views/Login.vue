<template>
<div class="logincontainer">
    <SimpleNav />
    <div class="loginbody">

        <div class="loginbox">

        <h2>Login In</h2>
        <br/>
        <form action="#" @submit.prevent="login">
            <div class="form-control">
            <label for="email">Username/Email</label>
            <input type="email" name="username" id="username" class="input is-rounded login-input" v-model="username">
            </div>
            <br/>
            <div class="form-control">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="input is-rounded login-input" v-model="password">
            </div>
            <br/>
            <div class="form-control">
            <button type="submit" class="button is-light is-inverted btn-submit">Login</button>
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
        data(){
            return {
                username: '',
                password: '',
                token: localStorage.getItem('access_token') || null,
                isLoggedIn: false
            }
        },
        methods: {
            login(){

                return new Promise((resolve, reject) => {
                axios.post('/api/login', {
                    username: this.username,
                    password: this.password
                })
                .then(response => {
                    this.token = response.data.access_token;
                    const accessToken = response.data.access_token;
                    localStorage.setItem('access_token', accessToken);
                    this.$router.push('/dashboard');
                    resolve(response);
                })
                .catch(error => {
                    console.log(error);
                    reject(error);
                })
            })
        },

        logout(){
            if(this.isLoggedIn){
            axios.defaults.headers.common['Authorization'] = 'Bearer' + this.token
            return new Promise((resolve, reject) => {
            axios.post('/api/logout')
            .then(response => {
                localStorage.removeItem('access_token');
                resolve(response);
            })
            .catch(error => {
                localStorage.removeItem('access_token');
                reject(error);
            })
          })
         }
        }

        },
        computed: {
            loggedIn(){
                if(this.token !== null){
                    this.isLoggedIn = true
                } else {
                    this.isLoggedIn = false
                }

            }

        }

    }
</script>
