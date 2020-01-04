<template>
<div>

<SimpleNav />

    <div class="container mapposition" >


            <NYMap @headerChange="updateHeader($event)"/>

    <Photoside :hoodFig="hoodFig" @openModal="openModal2($event)" />

    </div>


</div>
</template>

<script>
    import SimpleNav from './SimpleNav.vue'
    import NYMap from './NYMap.vue'
    import Photoside from './Photoside.vue'

    export default {
        props: {
            foto: []
        },
        components: {
            SimpleNav,
            NYMap,
            Photoside

        },
        data(){
            return {
                hoodFig: 'Neighborhoods',
                isActive: true
            }

        },
        mounted() {

        },
        methods: {
            updateHeader(clickedHeader){
                this.hoodFig = clickedHeader;
            },
            openModal2(passedPhoto){
                this.foto = passedPhoto;
                console.log(this.foto);
                this.displayModal = true;
            }
        }

    }
</script>
