<template>
<div class="container-fluid header-container">
<vue-headful
    title="Dashboard"
    description="Description from vue-headful"
/>
    <b-row class="top-row">
        <b-col lg="4" md="6" sm="12" class="mt-5 ml-5 pb-5">
            <SearchbarComponentWhite></SearchbarComponentWhite>
            <h1>Popular games</h1>
            <div class="d-flex"  >
            
                <b-card 
                v-for="game in games" v-bind:key="game.id"
                :title="game.name"
                :img-src="'http://127.0.0.1:8000/' + game.image"
                img-alt="Image"
                img-top
                style="max-width: 20rem;"
                class="mb-2 default-card hvr-grow col-lg-12 col-md-12 col-sm-12 mr-5"
                >
                    <div class="row card-content">
                        <div class="lg-6">
                        <b-card-text> 6 ads available </b-card-text>
                        </div>
                        <div class="lg-6">
                        <router-link v-bind:to="'/game/'+game.id">
                            <b-button class="float-right homepage-cardbutton text-center">See ads</b-button>
                        </router-link>
                        </div>
                    </div>
                </b-card>
           </div>
         </b-col>
    </b-row>

    <b-row>
        <b-col lg="4" md="6" sm="12" class="mt-5 ml-5 pb-5" >
            <h1>Guides</h1>
            <b-card
            title="Test"
            img-src="https://i.ytimg.com/vi/S5q_vps0R-M/maxresdefault.jpg"
            img-alt="Image"
            img-top
            style="max-width: 20rem;"
            class="mb-2 default-card hvr-grow"
            >
                <div class="row card-content">
                    <div class="offset-lg-4 lg-6 guide-button">
                        <router-link to="/setup-guide">
                            <b-button class="float-right homepage-cardbutton text-center">See guide</b-button>
                        </router-link>
                    </div>
                </div>
            </b-card>
         </b-col>
    </b-row>
</div>
</template>

<script>
 /* eslint-disable */
import SearchbarComponentWhite from './SearchbarComponentWhite.vue'

export default {
  name: 'app',
  components: {
    'SearchbarComponentWhite': SearchbarComponentWhite
  },
  methods: {
    singleGame (id) {
      this.$router.push('/game/' + id)
    }
  },
  mounted: function() {
      this.$http.get('http://127.0.0.1:8000/api/games')
        .then(response => this.games = response.data)
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

.top-row {
    background-color: $grey;
    border-radius: 0px 0px 0px 50px;
}

 h1 {
     color: $gh-purple;
     font-weight: 700 !important;
     font-size: 30pt !important;
     margin-bottom: 33px !important;
 }

 .default-card {
    padding: 0 !important;
    border-radius: 25px !important;
    -webkit-box-shadow: 3px 3px 6px 0px rgba(0,0,0,0.16);
    -moz-box-shadow: 3px 3px 6px 0px rgba(0,0,0,0.16);
    box-shadow: 3px 3px 6px 0px rgba(0,0,0,0.16);
     img {
         border-radius: 25px 25px 0px 0px;
         height: 160px;
     }
     .card-content {
         padding-left: 1.25rem;
         
         button {
            margin-left: 4.25rem;
            cursor: pointer;
            border-radius: 25px;
            background-color: $gh-purple;
            border-color: $gh-purple;
            font-weight: 500;
            margin-top: 0px;
            font-size: 10pt;
             
         }
         button:hover{
            background-color: $button-hover;
            border-color: $button-hover;
         }
     }
     .card-title {
         font-weight: 700;
         font-size: 20pt;
     }
     .card-text {
         color: $gh-purple;
         font-size: 13pt;
         font-weight: 500;
         margin-top: 10px;
     }
 }
 .guide-button {
     button {
        margin-right: 25px !important;
     }
     
 }
</style>