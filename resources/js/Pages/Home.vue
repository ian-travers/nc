<template>
    <h1 class="font-semibold text-2xl">Hello World with Inertia and Hello, {{ name }}</h1>

    <Nav/>
</template>

<script setup>
import Nav from '../Shared/Nav';

defineProps({
    'name': {
        type: String,
        default: 'A N Owen'
    }
})
</script>
