<template> 
<div class="container-fluid header-container">
<vue-headful
    title="Game Detail - "
    description="Description from vue-headful"
    />
    <b-row class="ad-setup">
        <b-col lg="8" md="12" sm="12" class="mt-5 ml-5 pb-5">
            <SearchbarComponentWhite></SearchbarComponentWhite>
            <b-row>
                <b-col col lg="8" class="mb-2">
                    <h1> Fifa 20 </h1>
                    <h2>1. Ad after the goal</h2>
                </b-col>
            </b-row>
            <b-row>
                <b-col col lg="8" class="mr-5">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dapibus arcu purus, et tempus eros egestas sollicitudin. Morbi nisi orci, egestas non semper id, sollicitudin eu felis. Ut porta auctor nisl sit amet mattis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis enim nisl, aliquam at tempor eget, pharetra et augue. In vitae tortor a eros vehicula pellentesque. Quisque ac ligula non felis pretium ullamcorper. Nulla facilisi. Maecenas aliquet sapien a ullamcorper mollis. Sed vel tellus vestibulum, aliquam augue eu, mollis lacus. Etiam efficitur mollis lacus, a commodo tortor vulputate et. In ut cursus nisl, ut elementum turpis. Cras ac dolor sed ligula viverra scelerisque at id metus. Donec eget turpis quis leo hendrerit cursus at ut lectus. Vivamus ultrices ut urna ut lacinia. Curabitur sagittis mollis nisi in malesuada.</p>
                </b-col>
            </b-row>
            <b-row>
               <b-col>
                   <img lg="6" md="12" sm="12" class="mr-5 mb-2" src="@/assets/img/21.png"> 
                   <img lg="6" md="12" sm="12" src="@/assets/img/22.png"> 
                </b-col> 
            </b-row>
        </b-col>
    </b-row>
</div>
</template>

<script> 
import SearchbarComponentWhite from './SearchbarComponentWhite.vue'

export default {
  name: 'app',
  components: {
        'SearchbarComponentWhite': SearchbarComponentWhite
  }
}
</script>

<style lang="scss"> 
@import "../assets/css/variables.scss";

.ad-setup {
    background-color: $grey;
    height: 100vh;
    h1 {
        color: $dark !important;
        font-size: 40pt !important;
    }
    h2 {
        color: $gh-purple !important; 
        font-size: 40pt; 
        border-bottom: 2px solid $gh-purple;
    }
    img {
        width: 320px;
    }
}
</style>