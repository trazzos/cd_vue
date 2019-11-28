<template>
    <v-app id="sandbox">
        <navigation-component></navigation-component>
        <header-component></header-component>
        <content-component></content-component>
        <footer-component></footer-component>
    </v-app>
</template>


<script>
  import NavigationComponent from 'root/components/NavigationComponent';
  import FooterComponent from 'root/components/FooterComponent';
  import HeaderComponent from 'root/components/HeaderComponent';
  import ContentComponent from 'root/components/ContentComponent';

  export default {
    components: {
      NavigationComponent,
      FooterComponent,
      HeaderComponent,
      ContentComponent
    },
  }
</script>
