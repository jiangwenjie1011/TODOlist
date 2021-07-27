<template>
    <div class="todolistContainer">
      <div class="heading">
        <h2 id="title">Todolist</h2>
        <add-item-form></add-item-form>
      </div>
      <list-view></list-view>
      </div>  
</template>

<script>
import AddItemForm from './addItemForm.vue'
import ListView from './listView.vue'
export default {
   components: {AddItemForm, ListView}
}
</script>

<style>
.todolistContainer {
  width: 300px;
  margin: auto;
}
</style>