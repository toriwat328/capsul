<template>
<div class="dashboardcontainer">

    <UserNav />
    <div class="dashboardbody">
            <h1>Hello {{userInfo[0].name}}</h1>
        <div class="dashboardbox">

                <UserPhotos />
        </div>
    </div>
</div>

</template>

<script>
    import UserNav from './UserNav.vue';
    import UserPhotos from './UserPhotos.vue';

    export default {
        components: {
            UserNav,
            UserPhotos
        },
        data (){
            return {
                token: localStorage.getItem('access_token') || null,
                isLoggedIn: true,
                userInfo: [],
            }
        },
        mounted() {

        },
        methods: {


        },
        created() {
            axios.defaults.headers.common['Authorization'] = 'Bearer ' + this.token
            axios.get('/api/user')
            .then(({data}) => this.userInfo = data)

            .catch(error => {
                console.log(error)
            })




        }

    }
</script>
