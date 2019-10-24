/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    components: {
        ExampleComponent
    }
    // data() {
    //     return{
    //         loading: true,
    //         loading2: false,
    //         loading3: false
    //     }
    // },
    // mounted() {
    //     setTimeout(() => {
    //         this.loading = false;
    //         this.loading2 = true;
    //             setTimeout(() => {
    //                 this.loading2 = false;
    //             }, 8000);
    //         }, 4000);
    //     setTimeout(() => {
    //         this.loading3 =true;
    //     },7000);
    // }
});

// export default {
//     el: "#about",
//     data() {
//         return{
//         loading: true,
//         loading2: false,
//         loading3: false
//         }
//     },
//     mounted() {
//         setTimeout(() => {
//         this.loading = false;
//         this.loading2 = true;
//         setTimeout(() => {
//             this.loading2 = false;
//         }, 8000);
//         }, 4000);
//         setTimeout(() => {
//             this.loading3 =true;
//         },7000);
//     }


    
