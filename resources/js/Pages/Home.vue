<script>
import { Head } from '@inertiajs/vue3';

export default {
    props: {
        user: Object,
    }
}
</script>

<template>

    <Head title="Welcome" />
    <h1>Welcome</h1>
    <p>Hello {{ user.name }} welcome to your first Inertia app!</p>
</template>