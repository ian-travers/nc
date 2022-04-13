<template>
    <inertia-head>
        <title>My app - Home</title>
    </inertia-head>

    <h1 class="font-semibold text-2xl">Hello World with Inertia and Hello, {{ name }}</h1>
</template>

<script setup>
defineProps({
    'name': {
        type: String,
        default: 'A N Owen'
    }
})
</script>
