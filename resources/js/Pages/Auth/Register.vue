<template>
    <AppLayout>
        <div class="min-h-screen flex items-center justify-center">
            <div class="max-w-md w-full">
                <div>
                    <h2
                        class=" text-center text-3xl font-extrabold text-white"
                    >
                        Register
                    </h2>
                </div>

                <form @submit.prevent="submit" class="mt-8 space-y-6">
                    <div
                        class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6"
                    >
                        <div class="sm:col-span-6">
                            <label
                                for="name"
                                class="block text-sm/6 font-medium text-white"
                                >Name</label
                            >
                            <div class="mt-2">
                                <div
                                    class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600"
                                >
                                    <input
                                        v-model="form.name"
                                        type="text"
                                        name="name"
                                        id="name"
                                        class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label
                                for="username"
                                class="block text-sm/6 font-medium text-white"
                                >Username</label
                            >
                            <div class="mt-2">
                                <div
                                    class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600"
                                >
                                    <input
                                        v-model="form.username"
                                        type="text"
                                        name="username"
                                        id="username"
                                        class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label
                                for="email"
                                class="block text-sm/6 font-medium text-white"
                                >Email</label
                            >
                            <div class="mt-2">
                                <div
                                    class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600"
                                >
                                    <input
                                        v-model="form.email"
                                        type="email"
                                        name="email"
                                        id="email"
                                        class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label
                                for="role"
                                class="block text-sm/6 font-medium text-white"
                                >Role</label
                            >
                            <div class="mt-2">
                                <div
                                    class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600"
                                >
                                    <select
                                      id="role"
                                      name="role"
                                      v-model="form.role"
                                      required
                                      class="relative block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-500 text-gray-900 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500"
                                    >
                                      <option value="" disabled selected hidden>Selecciona un rol</option>
                                      <option value="user">User</option>
                                      <option value="driver">Driver</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        <div class="sm:col-span-6">
                            <label
                                for="password"
                                class="block text-sm/6 font-medium text-white"
                                >Password</label
                            >
                            <div class="mt-2">
                                <div
                                    class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600"
                                >
                                    <input
                                        v-model="form.password"
                                        type="password"
                                        name="password"
                                        required
                                        class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    />
                                </div>
                            </div>
                        </div>
                        <div class="sm:col-span-6">
                            <label
                                for="password_confirmation"
                                class="block text-sm/6 font-medium text-white"
                                >Password confirm</label
                            >
                            <div class="mt-2">
                                <div
                                    class="flex items-center rounded-md bg-white pl-3 outline-1 -outline-offset-1 outline-gray-300 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-600"
                                >
                                    <input
                                        v-model="form.password_confirmation"
                                        type="password"
                                        name="password_confirmation"
                                        required
                                        class="block min-w-0 grow py-1.5 pr-3 pl-1 text-base text-gray-900 placeholder:text-gray-400 focus:outline-none sm:text-sm/6"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div>
                        <button
                            type="submit"
                            :disabled="form.processing"
                            class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 disabled:opacity-50"
                        >
                            Register
                        </button>
                    </div>

                    <div class="text-center">
                        <Link
                            href="/login"
                            class="text-indigo-600 hover:text-indigo-500"
                        >
                            You have account?, Login
                        </Link>
                    </div>
                </form>
            </div>
        </div>
    </AppLayout>
</template>

<script>
import AppLayout from "@/Layouts/AppLayout.vue";
import { Link, useForm } from "@inertiajs/vue3";

export default {
    components: {
        AppLayout,
        Link,
    },
    setup() {
        const form = useForm({
            name: "",
            username: "",
            email: "",
            role: "",
            password: "",
            password_confirmation: "",
        });

        const submit = () => {
            form.post("/register");
        };

        return {
            form,
            submit,
        };
    },
};
</script>
