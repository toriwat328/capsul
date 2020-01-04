<template>
<div>
    <SimpleNav />
    <div class="aboutbody">
        <Form />
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
        mounted() {

        }
    }
</script>
