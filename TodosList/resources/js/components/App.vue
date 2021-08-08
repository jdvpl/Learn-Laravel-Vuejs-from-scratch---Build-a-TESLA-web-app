<template>
    <div>
        <h1 style="color:darkgrey;font-weight:bold;margin-top:120px;text-align:center">Todo List</h1>
        <div class="todoListContainer">
            <add-item-form/>
            <list-view />
        </div>
    </div>
</template>

<script>
import addItemForm from './additemForm';
import listView from './listView';
    export default {
        components: {
            addItemForm,
            listView,
        }
    }
</script>


<style scoped>
.todoListContainer{
    width:400px;
    margin: auto;
    margin-top:50;
}
</style>

