<template>
    <Head>
        <title>Home</title>
        <meta
            name="description"
            content="Home description goes here"
            head-key="description"
        />
    </Head>

    <h1 class="font-semibold text-2xl">Hello World with Inertia and Hello, {{ name }}</h1>
</template>

<script setup>
import { Head } from '@inertiajs/inertia-vue3';

defineProps({
    'name': {
        type: String,
        default: 'A N Owen'
    }
})
</script>
