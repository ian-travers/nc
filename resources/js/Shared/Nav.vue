<template>
    <div class="hidden md:flex items-center justify-between h-16 flex-1 px-2 sm:px-4 md:px-6">
        <!-- Left part of a menu -->
        <div class="flex items-center space-x-2">
            <a href="/">
                <img class="w-20 md:w-24 mr-1 md:mr-2" src="/storage/logo.png" alt="Logo">
            </a>
            <NavLink href="#">Competitions</NavLink>
            <NavLink href="#">Tourneys</NavLink>
            <NavLink href="#">Season Standings</NavLink>
            <NavLink href="#">Game Server</NavLink>
        </div>

        <!-- Left part of a menu -->
        <ul class="flex items-center space-x-4">
            <li>
                <NavLink href="login" :active="$page.component === 'Auth/Login'">Login</NavLink>
            </li>
            <li>
                <NavLink href="settings" :active="$page.component === 'Settings'">Settings</NavLink>
            </li>
            <li>
                <NavLink href="logout" method="post" as="button">Logout</NavLink>
            </li>
        </ul>
    </div>
</template>

<script setup>
import NavLink from './NavLink';
</script>

