<template>
<div class="dashboardcontainer">
    <UserNav />
    <div class="dashboardbody">
    <div class="dashboardbox">
    <router-link tag="a" to="/addphoto" exact>
      <a class="button is-light">
        <strong>Add Photo</strong>
      </a>
    </router-link>

    </div>
    </div>
</div>
</template>

<script>
    import UserNav from './UserNav.vue'

    export default {
        components: {
            UserNav
        },
        mounted() {

        }
    }
</script>
