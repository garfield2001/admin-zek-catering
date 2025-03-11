<script setup>
import Sidebar from './Sidebar.vue';
import Navbar from './Navbar.vue';



</script>


<template>
    <Sidebar />
    <Navbar />
    <main>
        <slot />
    </main>

</template>
