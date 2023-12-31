import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/css/header.css',
                'resources/js/app.js',
                'resources/js/header.js'
            ],
            refresh: true,
        }),
    ],
});
