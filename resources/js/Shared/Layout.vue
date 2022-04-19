<template>
    <div class="flex flex-col min-h-screen">
        <div class="flex-grow bg-nfsu-map bg-no-repeat bg-cover bg-fixed">
            <Header/>
            <slot/>
        </div>
    </div>
</template>

<script setup>
import Header from "./Header";
</script>
