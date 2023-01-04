import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
export default defineConfig({
    plugins: [
        laravel([
            'resources/scss/core.scss',
            'resources/js/core/app.js',
        ]),
    ],
});