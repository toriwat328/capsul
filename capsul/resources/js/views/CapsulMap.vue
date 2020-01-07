<template>
<div class="capsulmapcontainer">
    <UserNav />

    <div class="capsulmapbody mapposition">
        <NYMapUser @headerChange="updateHeader($event)" />
        <PhotosideUser :hoodFig="hoodFig" @openModal="openModal2($event)" />
    </div>
</div>
</template>

<script>
    import UserNav from './UserNav.vue'
    import NYMapUser from './NYMapUser.vue'
    import PhotosideUser from './PhotosideUser.vue'

    export default {
        props: {
            foto: []
        },
        components: {
            UserNav,
            NYMapUser,
            PhotosideUser

        },
        data(){
            return {
                hoodFig: 'Neighborhood Feed',
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
