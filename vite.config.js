import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
    server: {
        https: false,
        host: true,
        strictPort: true,
        port: 7500,
        hmr: {host: 'localhost', protocol: 'ws'},
        watch: {
          usePolling:true,
        }
      },
    plugins: [
        laravel({
            input: ['resources/css/app.css', 'resources/js/app.js'],
            refresh: true,
        }),
    ],
});
