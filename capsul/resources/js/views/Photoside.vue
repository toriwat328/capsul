<template>
<div class="photoview">
    <h1 class="title hood">{{ hoodFig }}</h1>
    <hr>
    <div class="photocontainer">
        <div class="card" v-for="photo in photos">
            <div class="card-image">
            <figure class="image is-4by3">
              <img :src="photo.image" alt="image">
            </figure>
            </div>
            <div class="content">
                <p>by {{photo.user.name}} in the {{photo.decade}}</p>
            </div>
        </div>
    </div>



</div>
</template>

<script>
    export default {
        props: {
            hoodFig: {
                type: String
            }
        },

        data() {
            return {
                photos: []
            }

        },
        methods: {

        },
        created() {
            axios.get('/photos')
            .then(({data}) => this.photos = data)

        }
    }
</script>
