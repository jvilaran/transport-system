<template>
  <div class="bg-gray-900">
    <header class="shadow text-white">
      <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
          <div class="flex items-center">
            <p class="text-xl font-bold ">
              Transport-system
            </p>
          </div>
        </div>
      </nav>
    </header>

    <main class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <slot />
    </main>
  </div>
</template>

<script>
import { Link } from '@inertiajs/vue3'

export default {
  components: {
    Link
  }
}
</script>