<template>
<div class="wrapper">
<vue-headful
    title="Game overview"
    description="Description from vue-headful"
/>
<SidebarComponent></SidebarComponent>
<div class="content container-fluid">
<SearchbarComponentWhite></SearchbarComponentWhite>

    <div class="top-row-setupguides mh-100">
        <h1>Guides</h1>
        <b-row>
            <b-col lg="4" md="6" sm="12" class="mt-5 pb-5">
                    <b-card 
                    title="Obs setup"
                    :img-src="require('@/assets/img/obs.jpg')"
                    img-alt="Image"
                    img-top
                    style="max-width: 20rem;"
                    class="mb-2 default-card hvr-grow col-lg-12 col-md-12 col-sm-12 mr-5"
                    >
                        <div class="row card-content">
                            <div class="lg-6 offset-lg-5">
                            <router-link to="/obs">
                                <b-button class="float-right homepage-cardbutton text-center">See Guide</b-button>
                            </router-link>
                            </div>
                        </div>
                    </b-card>
            </b-col>
            <b-col lg="4" md="6" sm="12" class="mt-5 pb-5">
                    <b-card 
                    title="Touchportal setup"
                    :img-src="require('@/assets/img/touchportal.jpg')"
                    img-alt="Image"
                    img-top
                    style="max-width: 20rem;"
                    class="mb-2 default-card hvr-grow col-lg-12 col-md-12 col-sm-12 mr-5"
                    >
                        <div class="row card-content">
                            <div class="lg-6 offset-lg-5">
                            <router-link to="/touchportal">
                                <b-button class="float-right homepage-cardbutton text-center">See Guide</b-button>
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
import SearchbarComponentWhite from './SearchbarComponentWhite.vue'

export default {
  name: 'app',
  components: {
    'SidebarComponent': SidebarComponent,
    'SearchbarComponentWhite': SearchbarComponentWhite
  
 }
}
</script>

<style lang="scss">
@import "../assets/css/variables.scss";

.top-row-setupguides{
    background-color: $grey;
    padding-left: 50px;
    min-height: 84%;
}
</style>

