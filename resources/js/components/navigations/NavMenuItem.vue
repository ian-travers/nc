<template>
  <Link
    :href="href"
    :method="method"
    class="inline-flex items-center border-b-2 px-1 pt-1 text-sm font-medium"
    :class="
      isCurrent
        ? 'border-sky-500 text-sky-500'
        : 'border-transparent text-gray-500 hover:border-gray-900 hover:text-gray-900 dark:text-gray-300 dark:hover:border-gray-100 dark:hover:text-gray-100'
    "
  >
    <slot />
  </Link>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
  href: { type: String, required: true },
  isCurrent: { type: Boolean, default: false },
  method: { type: String, default: "get" },
});
</script>
