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
        <div class="flex justify-between space-x-4">
            <div class="w-full">
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
            <div class="w-full">
                <p class="mb-8">Custom dialog</p>

                <div class="inline-flex transform hover:translate-x-6 transition duration-1000 border border-amber-300">
                    <a href="#cancel-modal" class="text-white bg-gray-600 hover:bg-gray-500 px-4 py-2 rounded">
                        Open Laracast modal
                    </a>
                </div>
            </div>

            <div class="w-full">
                <p class="mb-8">My Modal</p>

                <button @click="isOpen = true" class="text-white bg-gray-600 hover:bg-gray-500 px-4 py-2 rounded">
                    Open my modal
                </button>
            </div>
        </div>
    </div>

    <modal name="cancel-modal">
        <h1 class="text-3xl font-bold mb-4">Leaving So Soon?</h1>

        <p class="mb-8">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem eligendi expedita odio quasi qui! A ad
            aspernatur blanditiis dolorem ea, eum impedit ipsa ipsum laboriosam maiores maxime nihil nulla odit omnis
            quae ratione sapiente sequi sit totam veniam! Animi hic ipsum minus officiis quisquam.
        </p>

        <template v-slot:footer>
            <a href="#" class="bg-gray-500 hover:bg-gray-600 text-white px-4 py-2 rounded-md mr-2">Cancel</a>
            <a href="#" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">Confirm</a>
        </template>
    </modal>


    <modal1 :open="isOpen" @close="isOpen = !isOpen">
        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet, at corporis dolor eius est facere impedit in nemo numquam officiis omnis quisquam sit voluptate? Amet debitis dolore exercitationem molestiae provident quos rem reprehenderit velit. Aliquid dolore modi quaerat vitae voluptate voluptatibus?</p>
    </modal1>
</template>

<script setup>
import { ElButton } from 'element-plus';
import { ElDialog } from 'element-plus';
import 'element-plus/dist/index.css';

import Modal from "../Shared/Modal";
import Modal1 from "../Shared/Modal1";
import { ref } from "vue";

defineProps({
    'name': String,
    'show': Boolean
});

const isOpen = ref(false);

</script>
