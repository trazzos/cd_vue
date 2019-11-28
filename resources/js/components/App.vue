<template>
    <v-app id="sandbox">
        <v-navigation-drawer
            v-model="primaryDrawer.model"
            :clipped="primaryDrawer.clipped"
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

        <v-app-bar
            :clipped-left="primaryDrawer.clipped"
            app
        >
            <v-app-bar-nav-icon
                @click.stop="primaryDrawer.model = !primaryDrawer.model"
            />
            <v-toolbar-title>Comprobante Digital</v-toolbar-title>
        </v-app-bar>

        <v-content>
            <router-view></router-view>
        </v-content>

        <v-footer
            :inset="footer.inset"
            app
        >
            <span class="px-4">&copy; {{ new Date().getFullYear() }}</span>
        </v-footer>
    </v-app>
</template>

<script>
  export default {
    data: () => ({
      drawers: ['Default (no property)'],
      primaryDrawer: {
        model: null,
        type: 'default (no property)',
        clipped: true,
        mini: false,
      },
      footer: {
        inset: true,
      },
    }),
  }
</script>
