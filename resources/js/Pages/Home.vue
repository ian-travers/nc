<template>
    <h1 class="font-semibold text-2xl">Hello World with Inertia and Hello, {{ name }}</h1>

    <ul>
        <li><Link class="text-blue-500 hover:underline" href="/">Home</Link></li>
        <li><Link class="text-blue-500 hover:underline" href="/settings">Settings</Link></li>
    </ul>
</template>

<script setup>
import { Link } from '@inertiajs/inertia-vue3';

defineProps({
    'name': {
        type: String,
        default: 'A N Owen'
    }
})
</script>
