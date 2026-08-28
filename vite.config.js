import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/aol-rugby.css',
                'resources/js/app.js',
                'resources/js/images.js',
            ],
            refresh: true,
        }),
        tailwindcss(),
    ],
    server: {
        watch: {
            ignored: [ 
            '**/storage/framework/views/**',
            '**/node_modules/**',
            '**/vendor/**',
            ],
        },
    },
});