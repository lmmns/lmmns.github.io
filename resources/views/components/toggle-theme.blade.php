<button type="button" @click="toggleTheme" class="{{ $class }} print:hidden">
    <span v-show="light">
        @svg('light/moon-stars', 'fa-moon-stars w-6 h-6')
    </span>
    <span v-show="dark">
        @svg('light/sun', 'fa-sun w-6 h-6')
    </span>
</button>