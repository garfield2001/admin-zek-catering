<script setup>
import { Link } from '@inertiajs/vue3';

</script>

<template>
    <p>Navbar</p>
    <Link class="hover:cursor-pointer" href="/logout" method="post" as="button">Logout</Link>
</template>