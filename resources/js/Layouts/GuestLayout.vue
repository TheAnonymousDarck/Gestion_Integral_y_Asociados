<script setup>
import { Head, Link, router } from '@inertiajs/vue3';
import ApplicationMark from '@/Components/ApplicationMark.vue';
import Banner from '@/Components/Banner.vue';
import NavLink from '@/Components/NavLink.vue';

defineProps({
    title: String,
    canLogin: Boolean,
    canRegister: Boolean,
});


const logout = () => {
    router.post(route('logout'));
};
</script>

<template>
    <div>

        <Head :title="title" />

        <Banner />

        <div class="min-h-screen bg-gray-100 dark:bg-gray-900">
            <nav class="bg-white border-b border-gray-100 dark:bg-gray-800 dark:border-gray-700">

                <div class="flex justify-between h-14">
                    <div class="flex mx-3">
                        <div class="flex items-center flex-shrink-0">
                            <ApplicationMark class="block w-auto h-9" />
                        </div>
                        <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                            <NavLink href="/" :active="route().current('welcome')">Inicio</NavLink>
                            <NavLink href="/about" :active="route().current('about')">Sobre nosotros</NavLink>
                            <NavLink href="/contact" :active="route().current('contact')">Contactanos</NavLink>
                            <NavLink href="/prices" :active="route().current('prices')">Precios</NavLink>
                        </div>

                        <div v-if="canLogin" class="p-4 text-right sm:fixed sm:top-0 sm:right-0">
                            <Link v-if="$page.props.auth.user" :href="route('dashboard')"
                                class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            Cursos
                            </Link>

                            <template v-else>
                                <Link :href="route('login')"
                                    class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                Iniciar de sesión
                                </Link>

                                <Link v-if="canRegister" :href="route('register')"
                                    class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                                Registrar
                                </Link>
                            </template>
                        </div>
                    </div>
                </div>

            </nav>

            <!-- Page Heading -->
            <header v-if="$slots.header" class="bg-white shadow dark:bg-gray-800">
                <div class="px-4 py-6 mx-auto max-w-7xl sm:px-6 lg:px-8">
                    <slot name="header" />
                </div>
            </header>

            <!-- Page Content -->
            <main>
                <slot />
            </main>
        </div>
    </div>
</template>
