<template>
    <ul class="flex space-x-4">
        <li>
            <NavLink href="/" :active="$page.component === 'Home'">Home</NavLink>
        </li>
        <li>
            <NavLink href="/settings" :active="$page.component === 'Settings'">Settings</NavLink>
        </li>
    </ul>
</template>

<script setup>
import NavLink from './NavLink';
</script>

