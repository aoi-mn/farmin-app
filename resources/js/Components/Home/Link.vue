<template>
    <Link :href="href">{{ name }}</Link>
</template>

<script setup>

import { Link } from "@inertiajs/vue3";

import { defineProps } from "vue";
defineProps(["name", "href"]);

</script>
