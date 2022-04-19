<template>
    <Head>
        <title>Settings</title>
        <meta
            name="description"
            content="Settings description goes here"
            head-key="description"
        />
    </Head>
    <div class="text-blue-300">
        <h1 class="font-semibold text-2xl">Settings Page</h1>

        <p class="mt-6">{{ name }}</p>
    </div>

</template>

<script setup>
defineProps({name: String})
</script>
