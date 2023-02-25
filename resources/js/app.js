// import './bootstrap';
import '../css/app.css';
import Antd from 'ant-design-vue';

import 'ant-design-vue/dist/antd.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { InertiaProgress } from '@inertiajs/progress';
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';
import { Link } from '@inertiajs/inertia-vue3'
import { Inertia } from '@inertiajs/inertia'

// window.back = () => window.history.back() // use to do back
// window.addEventListener('popstate', (event) => {
//   event.stopImmediatePropagation()

//   Inertia.reload({
//     preserveState: false,
//     preserveScroll: false,
//     replace: true,
//     onSuccess: (page) => Inertia.setPage(page),
//     onError: () => (window.location.href = event.state.url)
//   })
// })

const appName = window.document.getElementsByTagName('title')[0]?.innerText || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) => resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob('./Pages/**/*.vue')),
    setup({ el, App, props, plugin }) {
        return createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ZiggyVue, Ziggy)
            .use(Antd)
            .component('Link', Link)
            .mount(el);
    },
});

InertiaProgress.init({ color: '#4B5563' });
