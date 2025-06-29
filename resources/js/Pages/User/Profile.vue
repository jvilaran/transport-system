<template>
    <UserLayout>
        <div class="min-h-screen flex items-center justify-center bg-gray-50">
            <div class="max-w-md w-full space-y-8">
                <div>
                    <h2
                        class="mt-6 text-center text-3xl font-extrabold text-gray-900"
                    >
                        Profile
                    </h2>
                    <p class="text-center text-lg text-gray-600">
                        In this site, you have some inputs with your
                        information.
                    </p>
                </div>
            </div>
        </div>
    </UserLayout>
</template>

<script>
import UserLayout from "@/Layouts/UserLayout.vue";

export default {
    components: {
        UserLayout,
    },
    props: {
        user: Object,
    },
};
</script>
