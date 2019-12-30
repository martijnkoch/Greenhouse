<template>
<div class="wrapper">
<vue-headful
title="Game Detail"
description="Description from vue-headful"
/>
<SidebarComponent></SidebarComponent>
<div class="container-fluid header-container">

    <b-row class="game-detail" v-if="gameData">
        <b-col lg="8" md="12" sm="12" class="mt-5 pb-5" >
            <SearchbarComponentGrey></SearchbarComponentGrey>
            <h1 >{{gameData[0].name}}</h1>
            <b-img :src="`http://localhost:8888/`+gameData[0].image" fluid alt="Responsive image"></b-img>
            <b-row v-for="scene in sceneOne" v-bind:key="scene.id">
                <b-col col lg="6">
                    <h2>{{scene.scene_id}}. {{scene.scene_title}}</h2>
                </b-col>
                <b-col col lg="4">
                    <router-link to="/ad-setup">
                        <b-button class="float-right gamedetail-cardbutton text-center">Ad setup</b-button>
                    </router-link>
                </b-col>
                <b-row class="pl-3">
                    <b-col col lg="10">
                        <h4>Four ads available</h4>
                        <p>{{scene.description}}</p>
                    </b-col>
                </b-row>
            </b-row>

            <b-row>
                <b-col col lg="4" class="link mr-5" v-for="ad in adsOne" v-bind:key="ad.id">
                    <h4>Client: {{ad.clientname}}</h4>
                    <div class="d-flex mt-2">
                        <b-col lg="12" class="p-0">
                        <b-input-group size="lg" append="Copy url">
                            <b-form-input :value="'http://localhost:8888/'+ad.file"></b-form-input>
                        </b-input-group>
                        </b-col>
                    </div>
                </b-col>
            </b-row>
            <b-row v-for="scene in sceneTwo" v-bind:key="scene.id">
                <b-col col lg="6">
                    <h2>{{scene.scene_id}}. {{scene.scene_title}}</h2>
                </b-col>
                <b-col col lg="4">
                    <router-link to="/ad-setup">
                        <b-button class="float-right gamedetail-cardbutton text-center">Ad setup</b-button>
                    </router-link>
                </b-col>
                <b-row class="pl-3">
                    <b-col col lg="10">
                        <h4>Four ads available</h4>
                        <p>{{scene.description}}</p>
                    </b-col>
                </b-row>
            </b-row>

            <b-row>
                <b-col col lg="4" class="link mr-5" v-for="ad in adsTwo" v-bind:key="ad.id">
                    <h4>Client: {{ad.clientname}}</h4>
                    <div class="d-flex mt-2">
                        <b-col lg="12" class="p-0">
                        <b-input-group size="lg" append="Copy url">
                            <b-form-input :value="'http://localhost:8888/'+ad.file"></b-form-input>
                        </b-input-group>
                        </b-col>
                    </div>
                </b-col>
            </b-row>


        </b-col>
    </b-row>
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
  data () {
    return {
        isLoading: false,
        gameData: 0,
        adsOne: null,
        sceneOne: null,
        adsTwo: null,
        sceneTwo: null,
        adsThree: null,
        sceneThree: null
     }
  },
    methods: {
        fetchGame(){
           return this.$http.get(`http://localhost:8888/api/games/${this.$route.params.id}`)
            .then((response) => {
                console.log(response)
                this.gameData = response.data;
            })
            .catch(error => 
                this.gameData = [{title: 'no game data found'}]);
        }

    },
    created: function(){
        this.fetchGame(this.$route.params.id);
    },
    mounted: function() {
       // Get the first scene
       this.$http
        .get(`http://localhost:8888/api/games/${this.$route.params.id}/scene-one`)
        .then(response => {
            console.log(response)
            this.sceneOne = response.data})
        .catch(error => this.sceneOne = [{title: 'no scene found'}]);

      // Get the First ads 
      this.$http
        .get(`http://localhost:8888/api/games/${this.$route.params.id}/ads-one`)
        .then(response => {
            console.log(response)
            this.adsOne = response.data})
        .catch(error => this.adsOne = [{title: 'no ads found'}]);

       // Get the second scene
       this.$http
        .get(`http://localhost:8888/api/games/${this.$route.params.id}/scene-two`)
        .then(response => {
            console.log(response)
            this.sceneTwo = response.data})
        .catch(error => this.sceneTwo = [{title: 'no scene found'}]);

      // Get the Second ads 
      this.$http
        .get(`http://localhost:8888/api/games/${this.$route.params.id}/ads-two`)
        .then(response => {
            console.log(response)
            this.adsTwo = response.data})
        .catch(error => this.adsTwo = [{title: 'no ads found'}]);

       // Get the third scene
       this.$http
        .get(`http://localhost:8888/api/games/${this.$route.params.id}/scene-three`)
        .then(response => {
            console.log(response)
            this.sceneThree = response.data})
        .catch(error => this.sceneThree = [{title: 'no scene found'}]);

      // Get the third ads 
      this.$http
        .get(`http://localhost:8888/api/games/${this.$route.params.id}/ads-three`)
        .then(response => {
            console.log(response)
            this.adsThree = response.data})
        .catch(error => this.adsThree = [{title: 'no ads found'}]);
    },
  }

</script>

<style lang="scss">
@import "../assets/css/variables.scss";

.game-detail{
    background-color: $white !important;
    padding-left: 50px;
    h1 {
        color: $dark !important;
        font-size: 40pt;
        margin-bottom: 20px;
        padding-top: 30px;
    }
    h2 {
        margin-top: 40px;
        color: $gh-purple;
    }
    img {
        border-radius: 23px;
        width: 738px;
        height: 305px;
    }
    h4 {
        color: $gh-purple;
        font-size: 16pt;
        font-weight: 600;
        margin-top: 35px;
        margin-bottom: 40px;
    }
    p {
        word-spacing: normal;
        font-size: 12pt;
    }
    .input-group-text {
        background-color: $gh-purple;
        height: 25px;
        color: $white;
        border-radius: 0px 20px 20px 0px !important;
        font-size: 9pt !important;
        border-top: 1px solid $gh-purple !important;
        margin-left: -10px;
    }

    .gamedetail-cardbutton {
        width: 100px;
        margin-left: 4.25rem;
        cursor: pointer;
        border-radius: 25px;
        background-color: $gh-purple;
        border-color: $gh-purple;
        font-weight: 500;
        margin-top: 38px;
        font-size: 10pt;              
    }
    .gamedetail-cardbutton:hover {
        background-color: $button-hover;
        border-color: $button-hover;
    }
}
.link {
    height: 100px;
    background-color: $grey;
    border-radius: 20px;
    margin-top: 40px;
    h4 {
        margin-top: 18px !important;
        margin-bottom: 0px !important;
        font-size: 20pt;
    }
    button {
       background-color: $gh-purple;
       border-radius: 23px;
       font-size: 7pt;
       height: 23px; 
       width: 54px;
       padding-left: 0 !important;
    }
    input {
        border-color: $gh-purple;
        border: 1px solid $gh-purple;
    }
        .form-control {
        font-size: 9pt !important;
        color: $darkpurple !important;
        padding: 0px !important;
        padding-left: 11px !important;
        height: 24px !important;
        border-radius: 20px !important;

    }
}
</style>