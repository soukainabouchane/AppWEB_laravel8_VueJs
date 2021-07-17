<template>
  <div>
  <input type="text" class="todo-input" placeholder="what need to be done">
    Todo list here
  </div>
</template>

<script>
export default {
  name: 'TodoList',
  data () {
    return {
      msg: 'Welcome to Your Vue.js App'
    }
  }
}
</script>
<!-- lang="scss" -->
<style>
@import url("https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css");
.todo-input {
  width: 100%;
  padding: 10px 18px;
  font-size: 18px;
  margin-bottom: 16px;

  &:focus { 
  outline: 0;
  }
}
</style>
