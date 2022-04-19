<template>
    <Head>
        <title>Home</title>
        <meta
            name="description"
            content="Home description goes here"
            head-key="description"
        />
    </Head>

    <div class="text-blue-300">
        <h1 class="font-semibold text-2xl">Hello World with Inertia and Hello, {{ name }}</h1>
    </div>
</template>

<script setup>
defineProps({'name': String})
</script>
