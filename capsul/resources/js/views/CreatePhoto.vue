<template>
<div class="createphoto">
    <SimpleNav />
    <div class="aboutbody">
        <Form @completed="addPhoto"/>
    </div>
</div>
</template>

<script>
    import SimpleNav from './SimpleNav.vue';
    import Form from './Form.vue';

    export default {
        components: {
            SimpleNav,
            Form
        },
        methods: {
            addPhoto(photo){
                this.photos.unshift(status);

                alert('Your photo has been added to capsul!');

                this.$router.push('/dashboard');


            }
        }

    }
</script>
