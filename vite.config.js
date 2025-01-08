import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/mainpage.css', 'resources/js/mainpage.js'],
            refresh: true,
        }),
    ],
});
