import './bootstrap'

import { createApp, ref, watchEffect } from 'vue/dist/vue.esm-bundler'

const app = createApp({
    setup() {
        const dark = ref(document.documentElement.classList.contains('dark'))

        const toggleDarkMode = () => document.documentElement.classList[
            dark.value ? 'add' : 'remove'
        ]('dark');

        watchEffect(toggleDarkMode)

        return { dark }
    },

    computed : {
        light() {
            return ! this.dark
        }
    },

    methods : {
        toggleTheme() {
            this.dark = ! this.dark
        }
    }
})

app.mount('#app')

// Whenever the user explicitly chooses light mode
// localStorage.theme = 'light'

// Whenever the user explicitly chooses dark mode
// localStorage.theme = 'dark'

// Whenever the user explicitly chooses to respect the OS preference
// localStorage.removeItem('theme')
