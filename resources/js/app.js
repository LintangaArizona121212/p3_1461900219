
/**
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));

// const files = require.context('./', true, /\.vue$/i)


/**
 */

const app = new Vue({
    el: '#app'
});
