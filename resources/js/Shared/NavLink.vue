<template>
    <Link
        class="hover:underline"
        :class="{'font-semibold underline': active}"
    >
        <slot/>
    </Link>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";

defineProps({active: Boolean});
</script>
