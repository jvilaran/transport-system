<template>
    <div>
        <header class="bg-gray-900 shadow">
            <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="flex justify-between h-16">
                    <div class="flex items-center">
                        <Link
                            href="/dashboard"
                            class="text-xl font-bold text-gray-800"
                        >
                            Transport-system
                        </Link>
                    </div>

                    <div class="flex items-center gap-6">
                        <Link
                            href="/profile"
                            class="text-xl font-medium hover:text-gray-600"
                        >
                            Profile
                        </Link>
                        <Link
                            href="/services"
                            class="text-xl font-medium hover:text-gray-600"
                        >
                            Services
                        </Link>
                        <form @submit.prevent="logout" class="inline">
                            <button
                                type="submit"
                                class="text-xl font-medium hover:text-gray-600"
                            >
                                Logout
                            </button>
                        </form>
                    </div>
                </div>
            </nav>
        </header>

        <main class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
            <div>
                <div
                    v-if="$page.props.flash.success"
                    class="bg-green-100 text-green-800 p-2 rounded mb-4"
                >
                    {{ $page.props.flash.success }}
                </div>
                <div
                    v-if="$page.props.flash.warning"
                    class="bg-orange-100 text-orange-800 p-2 rounded mb-4"
                >
                    {{ $page.props.flash.warning }}
                </div>
                <div
                    v-if="$page.props.flash.error"
                    class="bg-red-100 text-red-800 p-2 rounded mb-4"
                >
                    {{ $page.props.flash.error }}
                </div>
            </div>
            <slot />
        </main>
    </div>
</template>

<script>
import { Link, useForm } from "@inertiajs/vue3";

export default {
    components: {
        Link,
    },
    setup() {
        const form = useForm({});

        const logout = () => {
            form.post("/logout");
        };

        return { logout };
    },
};
</script>
