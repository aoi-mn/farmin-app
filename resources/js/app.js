import { createApp, h } from "vue";
import { createInertiaApp } from "@inertiajs/vue3";
import { InertiaProgress } from '@inertiajs/progress';
import { resolvePageComponent } from './utils'; // Define this utility function

import HomeLay from "@/Layouts/HomeLay.vue";

createInertiaApp({

    resolve: (name) => {
        const page = resolvePageComponent(name);
        page.default.layout = page.default.layout ?? HomeLay;
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mixin({ methods: { route } })
            .mount(el);
    },
});

InertiaProgress.init();
