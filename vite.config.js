import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: ['resources/css/mainpage.css', 'resources/js/mainpage.js'],
            refresh: true,
        }),
    ],
    base: '/build/', // Pastikan base URL sesuai dengan folder build Anda
    server: {
        https: true, // Pastikan server menggunakan HTTPS
    },
});
