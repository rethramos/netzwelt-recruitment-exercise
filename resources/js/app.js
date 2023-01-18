import './bootstrap';
import { createApp } from 'vue/dist/vue.esm-bundler';
import ToggleListItem from './components/ToggleListItem.vue'

const app = createApp()

app.component('toggle-list-item', ToggleListItem)

app.mount('#app')
