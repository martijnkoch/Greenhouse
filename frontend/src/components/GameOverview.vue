<template>
<div class="wrapper">
<vue-headful
    title="Dashboard"
    description="Description from vue-headful"
/>
<SidebarComponent></SidebarComponent>
<div class="content container-fluid">
<SearchbarComponentGrey></SearchbarComponentGrey>

    <div class="top-row-gameoverview">
        <h1>Games</h1>
        <b-row>
            <b-col lg="4" md="6" sm="12" class="mt-5 pb-5" v-for="game in games" v-bind:key="game.id">
                    <b-card 
                    :title="game.name"
                    :img-src="'http://localhost:8888/'+game.image"
                    img-alt="Image"
                    img-top
                    style="max-width: 20rem;"
                    class="mb-2 default-card hvr-grow col-lg-12 col-md-12 col-sm-12 mr-5"
                    >
                        <div class="row card-content">
                            <div class="lg-6">
                            <b-card-text>{{game.ads_count}} ads available</b-card-text>
                            </div>
                            <div class="lg-6">
                            <router-link v-bind:to="'/game/'+game.id">
                                <b-button class="float-right homepage-cardbutton text-center">See ads</b-button>
                            </router-link>
                            </div>
                        </div>
                    </b-card>
            
            </b-col>
        </b-row>
    </div>
</div>
</div>
</template>

<script>
 /* eslint-disable */
import SidebarComponent from './SidebarComponent.vue'
import SearchbarComponentGrey from './SearchbarComponentGrey.vue'

export default {
  name: 'app',
  components: {
    'SidebarComponent': SidebarComponent,
    'SearchbarComponentGrey': SearchbarComponentGrey
  },
  methods: {
    singleGame (id) {
      this.$router.push('/game/' + id)
    }
  },
  mounted: function() {
      this.$http
        .get('http://localhost:8888/api/games')
        .then(response => {
            console.log(response)
            this.games = response.data})
        .catch(error => this.games = [{title: 'no games found'}]);
  },
  data () {
    return {
        games: null
    }
 }
}
</script>

<style lang="scss">
@import "../assets/css/variables.scss";

.top-row-gameoverview {
    background-color: $white;
    border-radius: 0px 0px 0px 50px;
    padding-left: 50px;
}
</style>

