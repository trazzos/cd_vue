<template>
    <v-app-bar
        :clipped-left="primaryDrawer.clipped"
        app
    >
        <v-app-bar-nav-icon
            @click.stop="primaryDrawer.model = !primaryDrawer.model"
        />
        <v-toolbar-title>Comprobante Digital</v-toolbar-title>
    </v-app-bar>
</template>


<script>
  export default {
    data: () => ({
      primaryDrawer: {
        model: null,
        clipped: true,
        mini: false,
      },
    }),
  }
</script>
