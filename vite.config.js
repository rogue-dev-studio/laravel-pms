import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import copyPlugin from 'rollup-plugin-copy';

export default defineConfig({
    plugins: [
        laravel({
            input: [
                'resources/css/app.css',
                'resources/js/app.js',
            ],
            refresh: true,
        }),
        copyPlugin({
            targets: [
                {
                    src: 'resources/assets/css',
                    dest: 'public/assets',
                },
                {
                    src: 'resources/assets/images',
                    dest: 'public/assets',
                },
                {
                    src: 'resources/assets/js',
                    dest: 'public/assets',
                },
                {
                    src: 'node_modules/line-awesome',
                    dest: 'public/assets/vendor',
                },
                {
                    src: 'node_modules/remixicon',
                    dest: 'public/assets/vendor',
                },
                {
                    src: 'node_modules/tui-time-picker',
                    dest: 'public/assets/vendor/tui-calendar',
                },
                {
                    src: 'node_modules/tui-calendar',
                    dest: 'public/assets/vendor/tui-calendar',
                },
                {
                    src: 'node_modules/tui-date-picker',
                    dest: 'public/assets/vendor/tui-calendar',
                },
                {
                    src: 'node_modules/moment/min/moment.min.js',
                    dest: 'public/assets/vendor',
                },
            ],
            hook: 'writeBundle',
        }),
    ],
});
