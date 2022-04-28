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

    <div class="text-blue-300 max-w-7xl mx-auto mt-8">
        <p class="mb-6">Element Plus Playground</p>
        <ElButton
            type="primary"
            @click="show = !show"
        >
            DefElBut
        </ElButton>

        <ElDialog
            v-model="show"
            title="Title"
        >
            Dialog body goes here
            <slot name="footer" class="flex block">
                <ElButton>Cancel</ElButton>
                <ElButton>Confirm</ElButton>
            </slot>
        </ElDialog>
    </div>
</template>

<script setup>
import { ElButton } from 'element-plus';
import { ElDialog } from 'element-plus';
import 'element-plus/dist/index.css'

defineProps({
    'name': String,
    'show': Boolean
})
</script>
