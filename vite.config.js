import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
    plugins: [
        vue(),
        laravel({
            input: [
                'resources/css/app.css',  // Main CSS file
                'resources/js/app.js',    // Main JS file
                
            ],
            refresh: true,
        }),
    ],
    base: process.env.APP_URL || '/',
});
