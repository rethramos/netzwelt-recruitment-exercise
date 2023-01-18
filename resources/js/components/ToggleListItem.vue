<template>
    <li v-for="node in treeNodes" :key="node.id">
      <span>{{ node.name }}</span>
      <ul v-if="node.children.length > 0">
        <toggle-list-item :tree-nodes="node.children"/>
      </ul> 
    </li>
</template>
<script>
export default {
    name: "toggle-list-item",
    props: {
      treeNodes: {
        type: Array,
        required: true
      }
    }
};
</script>
<style></style>
