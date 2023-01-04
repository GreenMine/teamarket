import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/style.min.css',
                'resources/js/vendors.js', 'resources/js/main.js',
                'resources/fonts/montserrat-regular.woff2'
            ],
            refresh: true,
        }),
    ],
});
