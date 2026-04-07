import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import tailwindcss from '@tailwindcss/vite';
import inject from "@rollup/plugin-inject";
export default defineConfig({
    plugins: [
        inject({   // => that should be first under plugins array
            $: 'jquery',
            jQuery: 'jquery',
        }),
        tailwindcss(),
        laravel({
            input: [
                'resources/js/app.js',
                'resources/js/swiperJS.js',
                'resources/js/customJS.js',
                'resources/js/favorites.js',
            ],
            refresh: true,
        }),

    ],

});
