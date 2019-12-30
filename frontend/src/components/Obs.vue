<template>
<div class="wrapper">
<vue-headful
    title="Obs guide"
    description="Description from vue-headful"
/>
<SidebarComponent></SidebarComponent>
<div class="container-fluid header-container">
    <b-row class="top-row setup-guide">
        <b-col lg="8" md="10" sm="12" class="mt-5 ml-5 pb-5">
           <SearchbarComponentWhite></SearchbarComponentWhite>
            <h1>How to set up TouchPortal</h1>
        </b-col>
        <b-col lg="6" class="mt-5 ml-5 pb-1">
            <h2>1. Install TouchPortal </h2>
        </b-col>
    </b-row>

    <b-row class="">
        <b-col lg="10" md="10" sm="12" class="mt-5 ml-5 pb-5">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quiepakis nostrud exercitation ullamco laboris nsi ut aliquip ex ea comepmodo consetquat. Duis aute irure dolor in reprehenderit in voluptate velit esse cfgillum dolore eutpe fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt inpeku culpa qui officia deserunt mollit anim id est laborum.

Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium poeyi doloremque laudantium, totam rem aperiam, eaque ipsa quae apsb illo inventore veritatis et quasi architecto beiatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, seprid quia </p>
        <img src="@/assets/img/obs.png">
        </b-col>
    </b-row>

</div>
</div>
</template>

<script>
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

.setup-guide{
    h1 {
        color: $dark;
    }
    h1:after {
        position: absolute;
        content: '';
        border-bottom: 2px solid $gh-purple;
        width: 100%;
        transform: translateX(-50%);
        bottom: 15px;
    }
        h2 {
            color: $gh-purple;
        }
    
}

</style>