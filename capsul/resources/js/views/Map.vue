<template>
<div>
<SimpleNav />
    <div class="container mapposition">
        <div>
            <NYMap />
        </div>
        <div class="photoview">
            <h1 class="title">East Harlem</h1>
            <hr>
        </div>
        <hr>

    </div>



</div>
</template>

<script>
    import SimpleNav from './SimpleNav.vue'
    import NYMap from './NYMap.vue'

    export default {
        components: {
            SimpleNav,
            NYMap

        },
        mounted() {

        }
    }
</script>
