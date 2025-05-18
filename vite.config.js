import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/sass/app.scss',   // ← aquí tu master SCSS
                'resources/js/app.js',
            ],
            refresh: true,
        }),
    ],
    css: {
        preprocessorOptions: {
            scss: {
                // Importa siempre tus variables antes de cada fichero SCSS
                additionalData: `@import "resources/sass/_variables.scss";`,
                // si quieres resolver imports desde node_modules:
                includePaths: ['node_modules'],
            },
        },
    },
});