<template>
<div>
<SimpleNav />

    <div class="container mapposition" >


            <NYMap @headerChange="updateHeader($event)"/>
    
    <Photoside :hoodFig="hoodFig" />

    </div>


</div>
</template>

<script>
    import SimpleNav from './SimpleNav.vue'
    import NYMap from './NYMap.vue'
    import Photoside from './Photoside.vue'

    export default {
        components: {
            SimpleNav,
            NYMap,
            Photoside

        },
        data(){
            return {
                hoodFig: 'Neighborhoods'
            }

        },
        mounted() {

        },
        methods: {
            updateHeader(clickedHeader){
                this.hoodFig = clickedHeader;
            }
        }

    }
</script>
