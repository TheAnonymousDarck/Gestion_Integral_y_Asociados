<template>
    <GuestLayout title="Prices" :canLogin="canLogin" :canRegister="canRegister">

        <section class="overflow-hidden text-gray-600 bg-white body-font">
            <div class="container px-5 py-8 mx-auto">

                <div class="flex flex-col justify-center w-full mb-4 text-center">
                    <h1 class="mb-2 text-3xl font-medium text-gray-900 sm:text-4xl title-font">Precios</h1>
                    <p class="mx-auto text-base leading-relaxed text-gray-500 lg:w-2/3">
                        los siguientes son los precios de los planes que ofrecemos
                    </p>
                    <div class="flex mx-auto mt-6 overflow-hidden border-2 border-indigo-500 rounded">
                        <span class="px-4 py-1 text-white bg-indigo-500 focus:outline-none">Mensualmente</span>
                    </div>
                </div>
                <div class="flex flex-wrap items-center justify-center m-4">
                    <div class="w-full p-4 xl:w-1/4 md:w-1/2">
                        <div class="relative flex flex-col h-full p-6 overflow-hidden border-2 border-gray-300 rounded-lg">
                            <h2 class="mb-1 text-sm font-medium tracking-widest title-font">Inicial</h2>
                            <h1 class="pb-4 mb-4 text-5xl leading-none text-gray-900 border-b border-gray-200">Gratis</h1>
                            <p class="flex items-center mb-2 text-gray-600">
                                <span
                                    class="inline-flex items-center justify-center flex-shrink-0 w-4 h-4 mr-2 text-white bg-gray-400 rounded-full">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                    </svg>
                                </span> Acceso a la plataforma
                            </p>
                            <p class="flex items-center mb-2 text-gray-600">
                                <span
                                    class="inline-flex items-center justify-center flex-shrink-0 w-4 h-4 mr-2 text-white bg-gray-400 rounded-full">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                    </svg>
                                </span> Acceso a cursos gratuitos
                            </p>
                            <button
                                class="flex items-center w-full px-4 py-2 mt-auto text-white bg-gray-400 border-0 rounded focus:outline-none hover:bg-gray-500">
                                Acceder
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>

                            </button>
                            <p class="mt-3 text-xs text-gray-500">
                                Accedes al contenido de inmediato
                            </p>
                        </div>
                    </div>
                    <div class="w-full p-4 xl:w-1/4 md:w-1/2">
                        <div
                            class="relative flex flex-col h-full p-6 overflow-hidden border-2 border-indigo-500 rounded-lg">
                            <span
                                class="absolute top-0 right-0 px-3 py-1 text-xs tracking-widest text-white bg-indigo-500 rounded-bl">POPULAR</span>
                            <h2 class="mb-1 text-sm font-medium tracking-widest title-font">PRO</h2>
                            <h1
                                class="flex items-center pb-4 mb-4 text-5xl leading-none text-gray-900 border-b border-gray-200">
                                <span>$149</span>
                                <span class="ml-1 text-lg font-normal text-gray-500">MXN</span>
                            </h1>
                            <p class="flex items-center mb-2 text-gray-600">
                                <span
                                    class="inline-flex items-center justify-center flex-shrink-0 w-4 h-4 mr-2 text-white bg-gray-400 rounded-full">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                    </svg>
                                </span>Acceso a la plataforma
                            </p>
                            <p class="flex items-center mb-2 text-gray-600">
                                <span
                                    class="inline-flex items-center justify-center flex-shrink-0 w-4 h-4 mr-2 text-white bg-gray-400 rounded-full">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                    </svg>
                                </span>Acceso a los cursos gratuitos
                            </p>
                            <p class="flex items-center mb-2 text-gray-600">
                                <span
                                    class="inline-flex items-center justify-center flex-shrink-0 w-4 h-4 mr-2 text-white bg-gray-400 rounded-full">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                    </svg>
                                </span>Acceso a los cursos premium
                            </p>
                            <p class="flex items-center mb-6 text-gray-600">
                                <span
                                    class="inline-flex items-center justify-center flex-shrink-0 w-4 h-4 mr-2 text-white bg-gray-400 rounded-full">
                                    <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2.5" class="w-3 h-3" viewBox="0 0 24 24">
                                        <path d="M20 6L9 17l-5-5"></path>
                                    </svg>
                                </span>Derecho a una asesoria personalizada Gratis
                            </p>
                            <button
                                class="flex items-center w-full px-4 py-2 mt-auto text-white bg-indigo-500 border-0 rounded focus:outline-none hover:bg-indigo-600">
                                Acceder
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-4 h-4 ml-auto" viewBox="0 0 24 24">
                                    <path d="M5 12h14M12 5l7 7-7 7"></path>
                                </svg>
                            </button>
                            <p class="mt-3 text-xs text-gray-500">
                                Accedes al contenido de inmediato
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </GuestLayout>
</template>


<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});
</script>
