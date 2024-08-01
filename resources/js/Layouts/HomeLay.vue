<template>
    <Head title="Home" />
    <div>
        <!-- Preloader -->
        <div class="preloader">
            <img
                class="preloader__image"
                width="60"
                :src="`${publicPath}assets/images/loader.png`"
                alt="Loading..."
            />
        </div>

        <div class="page-wrapper">
            <!-- Header -->
            <Header />

            <!-- Sticky Header Placeholder -->
            <div class="stricky-header stricked-menu main-menu">
                <div class="sticky-header__content"></div>
            </div>

            <!-- Main Content -->
            <main>
                <slot></slot>
            </main>

            <!-- Footer -->
            <Footer />
        </div>
    </div>
</template>

<script setup>
import Header from "@/Components/Home/Header.vue";
import Footer from "@/Components/Home/Footer.vue";
import { ref } from "vue";

const publicPath = ref(import.meta.env.VITE_APP_URL || "/"); // Use VITE_APP_URL or fallback to "/"
</script>

<script>
import { Head } from "@inertiajs/vue3";
</script>

<style scoped>
.active {
    text-decoration: underline;
    font-weight: bold;
    color: darkgreen; /* Example active class styles */
}
</style>
