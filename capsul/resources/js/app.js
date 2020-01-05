/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

import './bootstrap';

import router from './routes';

router.beforeEach((to, from, next) => {
  if (to.matched.some(record => record.meta.requiresAuth)) {
    // this route requires auth, check if logged in
    // if not, redirect to login page.

    if (!localStorage.getItem('access_token')) {
      next({
        path: '/login',

      })
    } else {
      next()
    }
} else if (to.matched.some(record => record.meta.requiresVisitor)) {


      if (localStorage.getItem('access_token')) {
        next({
          path: '/dashboard',

        })
      } else {
        next()
      }
    } else {
    next() // make sure to always call next()!
  }
})




new Vue({

    el: '#app',

    router,

});
