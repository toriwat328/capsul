<template>
<div class="createphoto">
    <UserNav />
    <div class="aboutbody">
        <Form @completed="addPhoto"/>
    </div>
</div>
</template>

<script>
    import UserNav from './UserNav.vue';
    import Form from './Form.vue';

    export default {
        components: {
            UserNav,
            Form
        },
        methods: {
            addPhoto(photo){

                this.$router.push('/dashboard');


            }
        }

    }
</script>
