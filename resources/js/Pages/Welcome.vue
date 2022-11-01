<script setup>
import { Head, Link } from '@inertiajs/inertia-vue3';
import AuthenticationCard from '@/Components/AuthenticationCard.vue';
import AuthenticationCardLogo from '@/Components/AuthenticationCardLogo.vue';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    laravelVersion: String,
    phpVersion: String,
});
</script>

<template>
    <Head title="Bem-vindo" />

    <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">

        <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
            <div class="flex justify-center pt-8 sm:justify-start sm:pt-0">
                <AuthenticationCardLogo/>
            </div>

            <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1 p-6">

                    <h1 class="text-2xl my-4">
                        Bem-vindo ao meu Projeto de estagio :)
                    </h1>

                    <div v-if="$page.props.user">
                        <h1 class="text-xl">
                            Você ja esta <span class="text-green-500 underline">logado</span>, entre no sistema e começe a usar.
                        </h1>
                        <Link v-if="$page.props.user" :href="route('dashboard')" class="block rounded my-4 p-4 bg-green-600 text-white text-sm dark:text-gray-500">
                            Ir para dashboard
                        </Link>
                    </div>

                    <div v-if="!$page.props.user">
                        <h1 class="text-xl">
                            Você ja não esta <span class="text-red-500 underline">logado</span>, logue na sua conta ou crie uma para começar.
                        </h1>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-2">
                            <Link :href="route('login')" class="block rounded my-4 p-4 bg-blue-600 text-white text-sm dark:text-gray-500">
                                Login
                            </Link>
                            <Link :href="route('register')" class="block rounded my-4 p-4 bg-green-600 text-white text-sm dark:text-gray-500">
                                Criar conta
                            </Link>
                        </div>
                    </div>

                </div>
            </div>

            <div class="flex justify-center mt-4 sm:items-center sm:justify-between">
                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Versão do Laravel usada no projeto v{{ laravelVersion }} (PHP v{{ phpVersion }})
                </div>
            </div>
        </div>
    </div>
</template>
