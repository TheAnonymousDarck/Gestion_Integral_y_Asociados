<script setup>
import { Link } from '@inertiajs/vue3';
import GuestLayout from "@/Layouts/GuestLayout.vue";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});
</script>

<template>
    <GuestLayout title="Welcome" :canLogin="canLogin" :canRegister="canRegister">

        <div class="min-h-screen hero"
            style="background-image: url('https://www.unioncdmx.mx/wp-content/uploads/2022/06/constancia-de-situacion-fiscal-sat-prorroga.webp');">
            <div class="hero-overlay bg-opacity-60"></div>
            <div class="text-center hero-content text-neutral-content">
                <div class="max-w-md">
                    <h1 class="mb-5 text-5xl font-bold text-accent-content">Gestión Integral y asociados</h1>
                    <p class="mb-5">
                        "Declarar para ganar"
                    </p>

                    <Link v-if="$page.props.auth.user" :href="route('dashboard')" class="btn btn-primary">
                    Comenzar
                    </Link>

                </div>
            </div>
        </div>

    </GuestLayout>
</template>

<style></style>
