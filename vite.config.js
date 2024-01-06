import { resolve } from 'path';
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';

export default defineConfig({
  resolve: {
    alias: {
      '@tailwind.config': resolve(__dirname, './tailwind.config.js'),
      '@': resolve(__dirname, '/resources'),
    }
  },
  plugins: [
    laravel({
        input: ['resources/scss/app.scss', 'resources/js/app.js'],
        refresh: true,
    }),
  ], 
});
