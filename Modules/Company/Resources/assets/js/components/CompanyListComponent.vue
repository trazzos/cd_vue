<template>
    <v-container fluid>
        <v-row
            align="center"
            justify="center"
        >
            <v-col cols="12">
                <v-data-table
                    :headers="headers"
                    :items="desserts"
                    :items-per-page="5"
                    :loading="true"
                    class="elevation-1"
                ></v-data-table>
            </v-col>
        </v-row>
    </v-container>
</template>


<script>
  import { mapState, mapMutations } from 'vuex';

  import globalStore from 'root/store/globalStore';

  export default {
    beforeCreate: function() {
      if (!this.$store.state.globalStore) {
        this.$store.registerModule(globalStore.name, globalStore);
      }
    },
    mounted() {
      this.setLoading(false);
    },
    data () {
      return {
        headers: [
          {
            text: 'Dessert (100g serving)',
            align: 'left',
            sortable: false,
            value: 'name',
          },
          {text: 'Calories', value: 'calories'},
          {text: 'Fat (g)', value: 'fat'},
          {text: 'Carbs (g)', value: 'carbs'},
          {text: 'Protein (g)', value: 'protein'},
          {text: 'Iron (%)', value: 'iron'},
        ],
        desserts: [
/*
          {
            name: 'Frozen Yogurt',
            calories: 159,
            fat: 6.0,
            carbs: 24,
            protein: 4.0,
            iron: '1%',
          },
          {
            name: 'Ice cream sandwich',
            calories: 237,
            fat: 9.0,
            carbs: 37,
            protein: 4.3,
            iron: '1%',
          },
*/
        ],
      }
    },
    methods: {
      ...mapMutations(globalStore.name, [
        "setLoading"
      ]),
    },
    computed: {
      ...mapState(globalStore.name, [
        'loading',
      ]),
    },
  }
</script>
