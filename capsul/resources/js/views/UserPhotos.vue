<template>

<div>

<div class="message-header buttonposition" >

    <h1>Your Photos</h1>

    <router-link tag="a" to="/addphoto" exact>
      <a class="button is-light">
        <strong>Add Photos</strong>
      </a>
    </router-link>

</div>
<div class="message-body userphotocontainer">
<div class="card is-dark" v-for="photo in photos" @click="showUserPic(photo)">
    <div class="card-image" >
    <figure class="image is-4by3">
      <img :src="photo.image" alt="image">
    </figure>
    </div>
    <div class="content">
        <p>from {{photo.user.name}} - {{photo.decade}}</p>
    </div>
</div>

</div>

<div class="modal" :class="{'is-active': isActive}" >
  <div class="modal-background"></div>
  <div class="modal-content">
    <p class="image is-4by3">
      <img :src="UserShowPhoto.image" alt="">
    </p>
    <section class="modal-card-body">
        <div class="modalformat">
            <p>{{UserShowPhoto.caption}}</p>
            <p>{{postedOn(UserShowPhoto)}}</p>


        </div>

        <p>{{UserShowPhoto.neighborhood}}</p>
        <button @click="deletePic(UserShowPhoto.id)">DELETE</button>
    </section>
  </div>
  <button class="modal-close is-large" aria-label="close" @click="closePic()"></button>
</div>

</div>
</template>

<script>

import moment from 'moment';
    export default {

        data (){
            return {
                photos: [],
                token: localStorage.getItem('access_token') || null,
                isActive: false,
                UserShowPhoto: []

            }
        },
        methods: {
            showUserPic(passedPhoto){
                this.UserShowPhoto = passedPhoto;
                this.isActive = !this.isActive;

            },
            closePic(){
                this.isActive = !this.isActive;
            },
            postedOn(photo){
                return moment(photo.created_at).fromNow();
            },
            deletePic(passedPhotoId){
                axios.defaults.headers.common['Authorization'] = 'Bearer ' + this.token
                axios.delete(`/api/photos/${passedPhotoId}`)
                .then(response => {
                    this.photos = response.data
                    this.isActive = !this.isActive;
                })
                .catch(error => console.log(error))
            }
        },
        created() {
            axios.defaults.headers.common['Authorization'] = 'Bearer ' + this.token
            axios.get('/api/user/photos')
            .then(({data}) => this.photos = data)

        }

    }
</script>
