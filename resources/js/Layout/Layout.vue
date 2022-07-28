<template>
  <main>
    <header>
      <Link href="/home" class="">Home</Link>
      <Link href="/about">About</Link>
      <Link href="/users">User</Link>
    </header>
    <article>
      <slot />
    </article>
    <footer>
        Copy: Alam
    </footer>
  </main>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue3'
import { Head } from '@inertiajs/inertia-vue3'

export default {
  components: {
    Link,
    Head
  },
}
</script>
