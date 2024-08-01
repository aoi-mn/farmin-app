<template>
    <Head title="Admin"/>
    <div class="admin-layout" data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-layout="vertical" data-pc-direction="ltr" data-pc-theme_contrast="" data-pc-theme="light">
        <!-- Sidebar Menu -->
        <Nav />

        <!-- Header -->
        <Header />

        <!-- Main Content -->
        <main>
            <slot></slot>
        </main>

        <Footer />
    </div>
</template>

<script>
import Nav from "@/Components/Admin/Nav.vue";
import Header from "@/Components/Admin/Header.vue";
import Footer from "@/Components/Admin/Footer.vue";
import { Head } from "@inertiajs/vue3";

export default {
    name: "AdminLayout",
    components: {
        Head,
        Nav,
        Header,
        Footer,
        
    },
};
</script>


