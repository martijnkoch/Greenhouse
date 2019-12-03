<template>
    <b-input-group class="mt-4 searchbar-grey mb-5">
        <b-form-input placeholder="Search"></b-form-input>
        <button class="btn btn-outline-secondary border-left-0 border searchbutton" type="button">
            <font-awesome-icon icon="search" :style="{ color: '#580D89' }"/>
        </button>
    </b-input-group>
</template>

<script>
export default {
    
}
</script>

<style lang="scss"> 
@import "../assets/css/variables.scss";

 .searchbar-grey {
     width: 320px !important;
     
     input {
        border-radius: 50px;
        border-color: $grey;
        background-image: url('/assets/img/search.png');
        background-repeat: no-repeat;
        background-position: right;
        background-color: $grey;
     }
     input::placeholder{
        color: $gh-purple;
        font-size: 12pt;
     }
     .searchbutton {
        border-radius: 0px 50px 50px 0px; 
        background-color: $grey;
        border: $grey !important;
     }
     .searchbutton:hover{
        background-color: $grey !important;
     }
 }
</style>