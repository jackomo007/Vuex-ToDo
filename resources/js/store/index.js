import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export default new Vuex.Store({
    state: {
        todos: [
            { body: 'Estudar ES6', done: true },
            { body: 'Estudar Babel', done: true },
            { body: 'Estudar Redux', done: false },
            { body: 'Estudar Vuex', done: false },
            { body: 'Aplicação Vuex onde aplicar o que aprendi', done: false },
            { body: 'Aplicação React Js onde aplicar o que aprendi', done: false }
        ]
    },

    mutations: {
        addToDo({ todos }, body) {
            todos.push({
                body,
                done: false
            });
        },
        completeAll({ todos }) {
            todos.forEach(todo => todo.done = true);
        },
        toggleToDo(state, todo) {
            todo.done = !todo.done;
        },
        deleteToDo({ todos }, todo) {
            todos.splice(todos.indexOf(todo), 1);
        }
    }
});