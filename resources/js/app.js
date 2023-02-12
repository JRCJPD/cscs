import './bootstrap';
import '../css/app.css';
import '../../node_modules/@popperjs/core/dist/umd/popper.min.js';
import Antd from 'ant-design-vue';

import 'bootstrap/js/dist/dropdown';
import 'ant-design-vue/dist/antd.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .use(Antd)
            .mount(el);
    },
    progress: {
        color: '#4B5563',
    },
});
