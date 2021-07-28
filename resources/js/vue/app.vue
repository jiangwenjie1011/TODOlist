<template>
    <div class="todolistContainer">
      <div class="heading">
        <h2 id="title">Todolist</h2>
        <add-item-form v-on:reloadlist = "getList()"></add-item-form>
      </div>
      <list-view :items = 'items'
       v-on:reloadlist = "getList()"></list-view>
      </div>  
</template>

<script>
import AddItemForm from './addItemForm.vue'
import ListView from './listView.vue'
export default {
   components: {AddItemForm, ListView},
   data() {
     return {
       items: []
     }
   },
   methods: {
     getList() {
       axios.get('api/items')
       .then((result) => {
         this.items = result.data
       }).catch((err) => {
         console.log(err);
       });
     }
   },
   created() {
     this.getList();
   }
}
</script>

<style>
.todolistContainer {
  width: 300px;
  margin: auto;
}
.heading {
  background-color: #e6e6e6;
  padding: 10px;
}
#title {
  text-align: center;
  
}
</style>