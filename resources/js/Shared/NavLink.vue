<template>
    <Link
        class="hover:bg-gray-700 hover:text-blue-100 px-3 py-2 rounded-md font-medium"
        :class="{'bg-gray-900 text-white': active, 'text-blue-200' : !active}"
    >
        <slot/>
    </Link>
</template>

<script setup>
import { Link } from "@inertiajs/inertia-vue3";

defineProps({active: Boolean});
</script>
