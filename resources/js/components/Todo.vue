<template>
        <div class="row flex-left">
            <li class="todo" :class="{'is-complete': todo.done}">
                <input  type="checkbox" :checked="todo.done" @change="toggleToDo(todo)" />
                <label v-text="todo.body"></label>
                <i @click="deleteToDo(todo)" class="material-icons mano" style="font-size: 13px;">clear</i>
            </li>
        </div>
</template>

<script>
    import {mapMutations} from 'vuex';
    export default {
        props: ['todo'],

        methods: mapMutations(['deleteToDo', 'toggleToDo'])
    }
</script>

<style>
    li{
        color:red;
    }
    .todo.is-complete{
        color:green;
    }
    .mano{
        cursor: pointer;
    }
</style>
