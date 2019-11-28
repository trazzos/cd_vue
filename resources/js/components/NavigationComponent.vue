<template>
    <v-navigation-drawer
        v-model="primaryDrawer.model"
        :clipped="primaryDrawer.clipped"
        :mini-variant="primaryDrawer.mini"
        app
        overflow
    >
        <v-list dense>
            <v-list-item link :to="{ name: 'home' }">
                <v-list-item-action>
                    <v-icon>mdi-home</v-icon>
                </v-list-item-action>
                <v-list-item-content>
                    <v-list-item-title>Inicio</v-list-item-title>
                </v-list-item-content>
            </v-list-item>

            <v-list-item link :to="{ name: 'hello' }">
                <v-list-item-action>
                    <v-icon>mdi-contact-mail</v-icon>
                </v-list-item-action>
                <v-list-item-content>
                    <v-list-item-title>Empresa</v-list-item-title>
                </v-list-item-content>
            </v-list-item>
        </v-list>
    </v-navigation-drawer>
</template>

<script>
    //TODO next use a vuex store to handle these values :P
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
