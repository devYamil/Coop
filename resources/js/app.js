
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
// SOLUCIONADO ERROR LARAVEL SI TIENS YA DECLARADO JQUERY
//require('./bootstrap');

window.Vue = require('vue');
window.axios = require('axios');
import Toasted from 'vue-toasted';
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
let Options;
Vue.use(Toasted, Options);
Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('post-component', require('./components/post/PostComponent.vue'));
Vue.component('registrar-usuario-component', require('./components/user/RegistrarUsuarioComponent.vue'));
Vue.component('iniciar-sesion-component', require('./components/user/IniciarSesionComponent.vue'));
Vue.component('spinner-component', require('./components/extras/SpinnerComponent.vue'));
Vue.component('dropzone-component', require('./components/post/DropZoneComponent.vue'));
// const files = require.context('./', true, /\.vue$/i)

// GLOBALs VARIABLES
Vue.config.productionTip = false;
Vue.prototype.$hostname = (Vue.config.productionTip) ? 'https://www.your-api.com' : 'http://127.0.0.1:4500';
Vue.prototype.$api_file = '/api/file';

// files.keys().map(key => {
//     return Vue.component(_.last(key.split('/')).split('.')[0], files(key))
// })

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});
