<template>
<div class="container-fluid header-container">
<vue-headful
    title="Game Detail - "
    description="Description from vue-headful"
    />
    <b-row class="game-detail">
        <b-col lg="8" md="12" sm="12" class="mt-5 ml-5 pb-5">
            <SearchbarComponentGrey></SearchbarComponentGrey>
            <h1>Fifa 20</h1>
            <b-img src="https://cdn02.nintendo-europe.com/media/images/10_share_images/games_15/nintendo_switch_4/H2x1_NSwitch_EaSportsFifa20NintendoSwitchLegacyEdition_image1600w.jpg" fluid alt="Responsive image"></b-img>
            <b-row>
                <b-col col lg="4">
                    <h2>1. Ad after the goal</h2>
                </b-col>
                <b-col col lg="4">
                    <router-link to="/ad-setup">
                        <b-button class="float-right gamedetail-cardbutton text-center">Ad setup</b-button>
                    </router-link>
                </b-col>
            </b-row>
            
            <b-row>
                <b-col col lg="8">
                    <h4>Four ads available</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dapibus arcu purus, et tempus eros egestas sollicitudin. Morbi nisi orci, egestas non semper id, sollicitudin eu felis. Ut porta auctor nisl sit amet mattis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis enim nisl, aliquam at tempor eget, pharetra et augue. In vitae tortor a eros vehicula pellentesque. Quisque ac ligula non felis pretium ullamcorper. Nulla facilisi. Maecenas aliquet sapien a ullamcorper mollis. Sed vel tellus vestibulum, aliquam augue eu, mollis lacus. Etiam efficitur mollis lacus, a commodo tortor vulputate et. In ut cursus nisl, ut elementum turpis. Cras ac dolor sed ligula viverra scelerisque at id metus. Donec eget turpis quis leo hendrerit cursus at ut lectus. Vivamus ultrices ut urna ut lacinia. Curabitur sagittis mollis nisi in malesuada.</p>
                </b-col>
            </b-row>

            <b-row>
                <b-col col lg="4" class="link mr-5">
                    <h4>Client: Mars</h4>
                    <div class="d-flex mt-2">
                        <b-col lg="12" class="p-0">
                        <b-input-group size="lg" append="Copy url">
                            <b-form-input></b-form-input>
                        </b-input-group>
                        </b-col>
                    </div>
                </b-col>
                <b-col col lg="4" class="link mr-5">
                    <h4>Client: Toto</h4>
                    <div class="d-flex mt-2">
                        <b-col lg="12" class="p-0">
                        <b-input-group size="lg" append="Copy url">
                            <b-form-input></b-form-input>
                        </b-input-group>
                        </b-col>
                    </div>
                </b-col>
                <b-col col lg="4" class="link mr-5">
                    <h4>Client: Fox Sports</h4>
                    <div class="d-flex mt-2">
                        <b-col lg="12" class="p-0">
                        <b-input-group size="lg" append="Copy url">
                            <b-form-input></b-form-input>
                        </b-input-group>
                        </b-col>
                    </div>
                </b-col>
                <b-col col lg="4" class="link mr-5">
                    <h4>Client: Ea Games</h4>
                    <div class="d-flex mt-2">
                        <b-col lg="12" class="p-0">
                        <b-input-group size="lg" append="Copy url">
                            <b-form-input></b-form-input>
                        </b-input-group>
                        </b-col>
                    </div>
                </b-col>
            </b-row>

            <b-row>
                <b-col col lg="4">
                    <h2>2. Ad after a match</h2>
                </b-col>
                <b-col col lg="4">
                    <router-link to="/ad-setup">
                        <b-button class="float-right gamedetail-cardbutton text-center">Ad setup</b-button>
                    </router-link>
                </b-col>
            </b-row>

            <b-row>
                <b-col col lg="8">
                    <h4>One ad available</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus dapibus arcu purus, et tempus eros egestas sollicitudin. Morbi nisi orci, egestas non semper id, sollicitudin eu felis. Ut porta auctor nisl sit amet mattis. Interdum et malesuada fames ac ante ipsum primis in faucibus. Duis enim nisl, aliquam at tempor eget, pharetra et augue. In vitae tortor a eros vehicula pellentesque. Quisque ac ligula non felis pretium ullamcorper. Nulla facilisi. Maecenas aliquet sapien a ullamcorper mollis. Sed vel tellus vestibulum, aliquam augue eu, mollis lacus. Etiam efficitur mollis lacus, a commodo tortor vulputate et. In ut cursus nisl, ut elementum turpis. Cras ac dolor sed ligula viverra scelerisque at id metus. Donec eget turpis quis leo hendrerit cursus at ut lectus. Vivamus ultrices ut urna ut lacinia. Curabitur sagittis mollis nisi in malesuada.</p>
                </b-col>
            </b-row>
            <b-row>
                <b-col col lg="4" class="link mr-5">
                    <h4>Client: Mars</h4>
                    <div class="d-flex mt-2">
                        <b-col lg="12" class="p-0">
                        <b-input-group size="lg" append="Copy url">
                            <b-form-input></b-form-input>
                        </b-input-group>
                        </b-col>
                    </div>
                </b-col>
            </b-row>
        </b-col>
    </b-row>
</div>
</template>

<script>
import SearchbarComponentGrey from './SearchbarComponentGrey.vue'

export default {
  name: 'app',
  components: {
        'SearchbarComponentGrey': SearchbarComponentGrey
  }
}
</script>

<style lang="scss">
@import "../assets/css/variables.scss";

.game-detail{
    background-color: $white !important;
    h1 {
        color: $dark !important;
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
        font-size: 14pt;
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