<template>
  <div
    class="relative flex-auto rounded-md border bg-white px-3 py-2.5 shadow-sm focus-within:ring-2 dark:bg-sky-900"
    :class="{
      'border-red-300 focus-within:border-red-600 focus-within:ring-red-600':
        error,
      'border-gray-400 focus-within:ring-indigo-600 dark:focus-within:ring-sky-300':
        !error,
    }"
  >
    <select
      :id="id"
      :value="modelValue"
      class="peer w-full bg-transparent"
      :class="{
        'text-gray-500 dark:text-gray-300': !modelValue,
      }"
      v-bind="{
        ...$attrs,
        onChange: ($event) => {
          $emit('update:modelValue', $event.target.value);
        },
      }"
    >
      <option
        class="text-gray-500 dark:text-gray-300"
        value=""
        disable
        selected
      >
        {{ label }} ...
      </option>
      <option
        v-for="option in options"
        :value="option"
        :key="option"
        :selected="option === modelValue"
      >
        {{ option }}
      </option>
    </select>
    <label
      :for="id"
      class="absolute left-3 transition-all peer-focus:-top-6 peer-focus:text-sm peer-focus:opacity-100"
      :class="{
        '-top-6 text-sm opacity-100': modelValue,
        'top-2 text-base opacity-0': !modelValue,
        'text-red-500 dark:text-red-400': error,
        'text-gray-600 peer-focus:text-indigo-600 dark:text-gray-300 dark:peer-focus:text-sky-300':
          !error,
      }"
    >
      {{ label }}
    </label>
  </div>
  <div v-if="error" class="mt-1 ml-3 text-xs text-red-600 dark:text-red-400">
    {{ error }}
  </div>
</template>

<script setup>
defineProps({
  id: {
    type: String,
    required: true,
  },
  label: {
    type: [String, Boolean],
  },
  modelValue: {
    type: [String, Number],
    default: "",
  },
  options: {
    type: Array,
    required: true,
  },
  error: {
    type: [String, Boolean],
  },
});
</script>

<style scoped>
select option {
  @apply bg-white dark:bg-sky-900;
}
</style>
