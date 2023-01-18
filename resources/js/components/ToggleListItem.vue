<template>
    <li v-for="node in treeNodes" :key="node.id">
        <span
            v-if="hasChildren(node)"
            class="caret"
            :class="{ 'caret-down': toggleTracker[node.id] }"
            @click="toggle(node.id)"
            >{{ node.name }}</span
        >
        <span v-else>{{ node.name }}</span>
        <ul
            v-if="hasChildren(node)"
            class="nested"
            :class="{ active: toggleTracker[node.id] }"
        >
            <toggle-list-item :tree-nodes="node.children" />
        </ul>
    </li>
</template>
<script>
export default {
    name: "toggle-list-item",
    props: {
        treeNodes: {
            type: Array,
            required: true,
        },
    },
    data() {
        return {
            toggleTracker: {},
        };
    },
    mounted() {
        this.treeNodes.forEach((n) => (this.toggleTracker[n.id] = false));
    },
    methods: {
        toggle(e) {
            this.toggleTracker[e] = !this.toggleTracker[e];
        },
        hasChildren(node) {
            return node.children && node.children.length > 0;
        },
    },
};
</script>
<style></style>
