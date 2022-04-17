<template>
    <div class="flex flex-col min-h-screen">
        <div class="flex-grow bg-nfsu-map bg-no-repeat bg-cover bg-fixed text-blue-300">
            <section class="">
                <header class="flex justify-between">
                    <h1 class="font-bold text-lg">My App</h1>
                    <Nav/>
                </header>
            </section>

            <section>
                <slot/>
            </section>
        </div>
    </div>
</template>

<script setup>
import Nav from "./Nav";
</script>
