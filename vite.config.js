import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',
                'resources/sass/donation.scss',
                'resources/js/app.js',
                'resources/css/style.css',
                'resources/fontawesome/css/all.css',
                'resources/fontawesome/js/all',
                'resources/css/partners.css',
                'resources/css/media.css',
                'resources/css/app.css',
                'resources/js/donation.js',
            ],
            refresh: true,
        }),
    ],
});
