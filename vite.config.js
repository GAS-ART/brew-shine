import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css', 
                'resources/css/hero.css',
                'resources/css/benefits.css',
                'resources/css/results.css',
                'resources/css/steps.css',
                'resources/css/reviews.css',
                'resources/js/app.js'],
            refresh: true,
        }),
        tailwindcss(),
    ],
});
