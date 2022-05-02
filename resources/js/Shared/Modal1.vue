<template>
<!--    <transition name="fade">-->
        <div class="vue-modal" v-show="open">
            <transition name="drop-in" v-show="open">
                <div class="vue-modal-inner">
                    <div class="vue-modal-content">
                        <slot></slot>
                        <div class="flex">
                            <button
                                type="button"
                                class="bg-gray-500 hover:bg-gray-600 text-white block px-4 py-2"
                                @click="close"
                            >
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </transition>
        </div>
<!--    </transition>-->
</template>

<script setup>
import { onMounted, onUnmounted } from "vue";

const props = defineProps({
    open: {
        type: Boolean,
        required: true
    }
});

const emit = defineEmits(['close']);

const close = () => {
    emit('close');
}

const handleKeydown = (event) => {
    if (event.keyCode === 27) {
        close();
    }
}

onMounted(() => document.addEventListener("keydown", handleKeydown));
onUnmounted(() => document.removeEventListener("keydown", handleKeydown));
</script>

<style scoped>
.vue-modal {
    position: fixed;
    display: grid;
    place-items: center;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    overflow-x: hidden;
    overflow-y: auto;
    background: rgba(0, 0, 0, .4);
}

.vue-modal-inner {
    max-width: 500px;
}

.vue-modal-content {
    background-color: #003548;
    color: white;
    border: 1px solid rgba(255, 255, 255, .4);
    border-radius: .3rem;
    padding: 1rem;
}

.fade-enter-active,
.fade-leave-active {
    transition: opacity 1s;
}

.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}

.drop-in-enter-active,
.drop-in-leave-active {
    transition: all 1s ease-out;
}

.drop-in-enter-from,
.drop-in-leave-to {
    opacity: 0;
    transform: translateY(-300%);
}
</style>
