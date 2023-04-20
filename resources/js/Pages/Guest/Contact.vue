<template>
    <GuestLayout title="Contact" :canLogin="canLogin" :canRegister="canRegister">

        <section class="relative text-gray-600 bg-white body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-col w-full mb-12 text-center">
                    <h1 class="mb-4 text-2xl font-medium text-gray-900 sm:text-3xl title-font">Contactanos</h1>
                    <p class="mx-auto text-base leading-relaxed lg:w-2/3">
                        Para cualquier duda o consulta, no dudes en contactarnos.
                    </p>
                </div>
                <div class="mx-auto lg:w-1/2 md:w-2/3">
                    <div class="flex flex-wrap -m-2">
                        <div class="w-1/2 p-2">
                            <div class="relative">
                                <label for="name" class="text-sm leading-7 text-gray-600">Nombre</label>
                                <input type="text" id="name" name="name"
                                    class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                            </div>
                        </div>
                        <div class="w-1/2 p-2">
                            <div class="relative">
                                <label for="email" class="text-sm leading-7 text-gray-600">Correo Electronico</label>
                                <input type="email" id="email" name="email"
                                    class="w-full px-3 py-1 text-base leading-8 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200">
                            </div>
                        </div>
                        <div class="w-full p-2">
                            <div class="relative">
                                <label for="message" class="text-sm leading-7 text-gray-600">Mensaje</label>
                                <textarea id="message" name="message"
                                    class="w-full h-32 px-3 py-1 text-base leading-6 text-gray-700 transition-colors duration-200 ease-in-out bg-gray-100 bg-opacity-50 border border-gray-300 rounded outline-none resize-none focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200"></textarea>
                            </div>
                        </div>
                        <div class="w-full p-2">
                            <button
                                class="flex px-8 py-2 mx-auto text-lg text-white bg-indigo-500 border-0 rounded focus:outline-none hover:bg-indigo-600">Enviar</button>
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
