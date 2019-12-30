<template>
<div class="wrapper">
<vue-headful
    title="Profile"
    description="The profile page"
    />
<SidebarComponent></SidebarComponent>
<div class="content container-fluid">
<SearchbarComponentWhite></SearchbarComponentWhite>
  <div class="top-row-profile mh-100">
    <b-row>
      <b-col lg="3" class="profile-left mt-4">
        <b-row>
          <b-col lg="6">
            <img src="@/assets/img/jordan.jpg">
          </b-col>
          <b-col lg="6">
            <h2 class="mt-4">Jordan1337</h2>
            <p>Streamer</p>
          </b-col>
        </b-row>
      </b-col>
      <b-col lg="6" class="offset-lg-1 mt-4 profile-right">
        <b-row>
          <b-col lg="5">
          <p class="ml-2">Username</p>
            <b-input-group class="mt-2 searchbar-white profile-input mb-5">
              <b-form-input placeholder="Username" value="Jordan1337"></b-form-input>
            </b-input-group>
          </b-col>
             <b-col lg="5" class="offset-lg-2">
             <p class="ml-2">Email</p>
              <b-input-group class="mt-2 searchbar-white profile-input mb-5">
                <b-form-input placeholder="Jordan1337@gmail.com" value="Jordan1337@gmail.com"></b-form-input>
              </b-input-group>
            </b-col>
        </b-row>
        <b-row>
          <b-col lg="5">
          <p class="ml-2">Password</p>
            <b-input-group class="mt-2 searchbar-white profile-input mb-5">
              <b-form-input type="password" placeholder="Password"></b-form-input>
            </b-input-group>
          </b-col>
             <b-col lg="5" class="offset-lg-2">
             <p class="ml-2">Confirm password</p>
              <b-input-group class="mt-2 searchbar-white profile-input mb-2">
                <b-form-input type="password" placeholder="Confirm password"></b-form-input>
              </b-input-group>
              <b-button class="float-lg-right">Save changes</b-button>
            </b-col>
        </b-row>
      </b-col>
    </b-row>
    <b-row>
      <b-col lg="12" class="revenue mt-5 mb-5">
      <h2 class="pb-5">My stream revenue</h2>
        <div class="revenue-details">
            <h3 class="pt-4 pl-3"> Last 30 days </h3>
            <PieChart/>
        </div>
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
import PieChart from "./PieChart.vue";

export default {
  name: 'app',
  components: {
    'SidebarComponent': SidebarComponent,
    'SearchbarComponentWhite': SearchbarComponentWhite,
    'PieChart': PieChart,
  }
}
</script>

<style lang="scss">
@import "../assets/css/variables.scss";
  .top-row-profile{
    background-color: $grey;
    padding-left: 50px;
    min-height: 84%;
}
 h1 {
     color: $gh-purple;
 }
 .profile-left {
   img {
    height: 116px;
    border-radius: 90px;
    -webkit-box-shadow: 3px 3px 6px 0px rgba(0,0,0,0.16) !important;
    -moz-box-shadow: 3px 3px 6px 0px rgba(0,0,0,0.16) !important;
    box-shadow: 3px 3px 6px 0px rgba(0,0,0,0.16) !important;
   }
   h2 {
    font-weight: 700 !important;
    font-size: 25pt !important;
   }
   p { 
     color: $gh-purple;
     font-weight: 500;
   }
 }
 .profile-right{
     p {
    color: $gh-purple;
    border-bottom: 1px solid rgba(39, 28, 66, .5);
    }
  .profile-input {
    height:50px;

    input{ 
      color: $gh-purple;
    }
  }
  button{
    margin-right: -90px;
    float: right; 
    cursor: pointer;
    border-radius: 25px;
    background-color: $gh-purple;
    border-color: $gh-purple;
    font-weight: 500;
    font-size: 11px;
    height: 31px;
  }
  button:hover{
    background-color: $button-hover;
    border-color: $button-hover;  
  }
 }
.revenue {
  h2 {
    color: $gh-purple;
    font-weight: 700 !important;
    font-size: 25pt !important;
  }
  .revenue-details {
    min-height: 500px;
    background-color: $white;
    border-radius: 23px;
    width: 65%;
    h3 {
      color: $gh-purple;
      font-size: 10pt;
    }
  }
}
</style>