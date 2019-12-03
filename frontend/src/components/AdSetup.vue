<template> 
<div class="container-fluid header-container">
<vue-headful
    title="Game Detail - "
    description="Description from vue-headful"
    />
    <b-row class="ad-setup">
        <b-col lg="8" md="12" sm="12" class="mt-5 ml-5 pb-5">
            <SearchbarComponentWhite></SearchbarComponentWhite>
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
}
</style>