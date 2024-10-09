<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>

<template>
    <!-- Custom Cursor Start -->
    <div
        class="custom_cursor_one fixed top-0 left-0 w-8 h-8 border border-gray-400 rounded-full pointer-events-none">
    </div>
    <div
        class="custom_cursor_two w-1 h-1 rounded-full border border-gray-400 bg-metborder-gray-400 fixed pointer-events-none left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
    </div>
    <!-- Custom Cursor End -->


    <!-- App Preloader Start -->
    <div id="preloader">
        <div class="loader_line"></div>
        <div
            class="absolute w-20 h-20 transition-all delay-300 -translate-x-1/2 -translate-y-1/2 rounded-full logo top-1/2 left-1/2 bg-nightBlack border-greyBlack flex-center">
            <img src="assets/img/site-logo.svg" alt="Minfo">
        </div>
    </div>
    <!-- App Preloader End -->
         <!-- Footer Start -->
         <footer class="mx-auto minfo__contentBox max-w-container xl:max-2xl:max-w-65rem">
                <div class="footer-container text-center py-6 max-w-content xl:max-2xl:max-w-50rem max-xl:mx-auto xl:ml-auto">
                    <p>
                        Copyright by
                        <a href="#" class="transition-colors">@domain.com</a>
                    </p>
                </div>
            </footer>
            <!-- Footer End -->

    <!-- Background Line and Animation -->
    <div class="bg-lines fixed inset-0 -z-1 md:max-xl:max-w-[45rem] xl:max-w-60rem 2xl:max-w-container mx-auto max-sm:px-8 sm:max-xl:px-12">
        <div class="line-wrapper max-w-[1130px] w-full h-full ml-auto 2xl:-mr-24 relative flex justify-between *:w-px *:h-full *:border-r *:border-dashed *:border-slate-300 dark:*:border-metalBlack *:relative *:before:absolute *:before:bg-theme *:before:rotate-45 *:before:-left-1 *:before:w-2 *:before:h-2">
            <div class="line1 before:animate-top_bottom"></div>
            <div class="line2 before:bottom-0 before:animate-bottom_top before:animate-delay-3s"></div>
            <div class="line3 before:animate-top_bottom before:animate-delay-3s"></div>
            <div class="line4 before:bottom-0 before:animate-bottom_top before:animate-delay-2s"></div>
        </div>
    </div>
</template>
