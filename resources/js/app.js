import './bootstrap';
import Vue from 'vue';
import board from './Board';
import apolloProvider from './apollo.config';


window.Vue = Vue;

Vue.component('Board', board);



const app = new Vue({
    el: '#app',
    apolloProvider
});
