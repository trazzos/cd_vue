<template>
    <v-app>
        <h1>Vue Router Demo App</h1>
        <p>
            <router-link :to="{ name: 'home' }">Home</router-link> |
            <router-link :to="{ name: 'hello' }">Hello World</router-link>
            <router-view></router-view>
        </p>
    </v-app>
</template>
<script>
  export default {}
</script>
