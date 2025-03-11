<script setup>
import { Head, useForm } from '@inertiajs/vue3';


const form = useForm({
    username: 'admin',
    password: '12345',
    remember: null,
});

</script>

<template>

    <Head title="Admin Login" />
    <div class="min-h-screen bg-white flex flex-col justify-center py-12 sm:px-6 lg:px-8">
        <div class="sm:mx-auto sm:w-full sm:max-w-md">
            <div class="bg-white py-8 px-4 shadow-2xl sm:rounded-lg sm:px-10">
                <!-- Header -->
                <div class="text-center mb-8">
                    <h2 class="text-2xl sm:text-3xl font-bold text-red-600">
                        Welcome Back
                    </h2>
                    <p class="mt-2 text-sm sm:text-base text-gray-600">
                        Please sign in to your account
                    </p>
                </div>

                <!-- Form -->
                <form @submit.prevent="form.post('/login')" class="space-y-6">
                    <!-- Username -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="username">Username</label>
                        <input type="text" v-model="form.username"
                            class="mt-1 block w-full px-3 py-2 sm:px-4 sm:py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 focus:outline-red-500"
                            required autocomplete="username" />
                    </div>

                    <!-- Password -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700" for="password">Password</label>
                        <div class="mt-1 relative">
                            <input type="password" v-model="form.password"
                                class="block w-full px-3 py-2 sm:px-4 sm:py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-red-500 focus:border-red-500 focus:outline-red-500"
                                required autocomplete="current-password" />
                        </div>
                    </div>

                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between space-y-2 sm:space-y-0">
                        <div class="flex items-center">
                            <input type="checkbox" v-model="form.remember"
                                class="h-4 w-4 text-red-600 focus:ring-red-500 border-gray-300 rounded" />
                            <label for="remember" class="ml-2 block text-sm text-gray-700">Remember me</label>
                        </div>
                        <a href="#" class="text-sm text-red-600 hover:text-red-700">Forgot password?</a>
                    </div>

                    <button type="submit" :disabled="form.processing"
                        class="hover:cursor-pointer w-full flex justify-center py-2 px-4 sm:py-3 border border-transparent rounded-lg shadow-sm text-sm sm:text-base font-medium text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                        <span>Sign In</span>
                    </button>
                </form>

                <!-- <p v-if="errors">{{ errors }} </p> -->

                <p class="mt-6 text-center text-sm">
                    Don't have an account?
                    <a href="#" class="font-medium text-red-600 hover:text-red-700">Sign up now</a>
                </p>
                <progress v-if="form.progress" :value="form.progress.percentage" max="100">
                    {{ form.progress.percentage }}%
                </progress>
            </div>
        </div>
    </div>

</template>
