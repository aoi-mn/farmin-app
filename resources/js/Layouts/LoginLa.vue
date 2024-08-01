<template>
  <Head title="Auth" />
  <main>
    <slot></slot>
  </main>
</template>

<script>
import { Head } from "@inertiajs/vue3";

export default {
  name: "LoginLa",
  components: {
    Head,
  },
};
</script>

<style scoped>

</style>
