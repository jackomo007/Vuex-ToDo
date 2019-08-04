require('./bootstrap');

window.Vue = require('vue');

import store from './store';

Vue.component('todo', require('./components/Todo.vue').default);

import { mapState, mapMutations } from 'vuex';

const app = new Vue({
    el: '#app',

    store,

    computed: {
        ...mapState(['todos']),

        allCompleted() {
            return this.todos.every(todo => todo.done);
        }
    },
    methods: {
        ...mapMutations(['completeAll']),

        addToDo(e) {
            let body = e.target.value;
            this.$store.commit('addToDo', body);
            e.target.value = '';
        }
    }
});
