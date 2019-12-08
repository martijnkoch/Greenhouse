<template>
<nav class="navbar navbar-expand-lg searchbar-bg ">
    <b-input-group class="mt-4 searchbar-white mb-5 ml-5">
        <b-form-input placeholder="Search"></b-form-input>
        <button class="btn btn-outline-secondary border-left-0 border searchbutton" type="button">
            <font-awesome-icon icon="search" :style="{ color: '#580D89' }"/>
        </button>
    </b-input-group>
</nav>

</template>

<script>
export default {

}
</script>

<style lang="scss"> 
@import "../assets/css/variables.scss";
.searchbar-bg {
    padding: 0 !important;
    background-color: $grey;
}
 .searchbar-white {
     width: 320px !important;
     
     input {
        border-radius: 50px;
        border-color: $white;
        background-image: url('/assets/img/search.png');
        background-repeat: no-repeat;
        background-position: right;
        background-color: $white;
     }
     input::placeholder{
        color: $gh-purple;
        font-size: 12pt;
     }
     .searchbutton {
        border-radius: 0px 50px 50px 0px; 
        background-color: $white;
        border: $white !important;
     }
     .searchbutton:hover{
        background-color: $white !important;
     }
 }
</style>