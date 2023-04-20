<template>
    <GuestLayout title="About" :canLogin="canLogin" :canRegister="canRegister">

        <div>
            <h1 class="text-3xl font-bold">About</h1>
        </div>
    </GuestLayout>
</template>


<script setup>
import GuestLayout from "@/Layouts/GuestLayout.vue";

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});
</script>
