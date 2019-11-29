<template>
    <!-- Sidebar -->
    <nav id="sidebar">
        <div class="sidebar-header">
            <router-link to="/dashboard">
                <img src="@/assets/img/GHG-logo-white_RGB.png"/>
            </router-link>
        </div>
        <div class="sidebar-profile">
            <router-link to="/profile">
                <img src="@/assets/img/jordan.jpg"/>
            </router-link>
            <h4>Hello, Jordan</h4>
        </div>
        <ul class="list-unstyled components">
            <li>
                <router-link to="/dashboard" active-class="active" >Dashboard</router-link>
            </li>
            <li>
                <router-link to="/">Games</router-link>
            </li>
            <li>
                <router-link to="/profile">Profile</router-link>
            </li>
            <li>
                <router-link to="/setup-guides">Setup Guides</router-link>
            </li>
            <li>
                <router-link to="/faq">FAQ</router-link>
            </li>
        </ul>
    </nav>
</template>

<script>
export default {
  name: 'app',
  components: {
    
  }
}
</script>

<style lang="scss">
@import "../assets/css/variables.scss";

#sidebar {
    background: $gh-purple;
    min-width: 172px;
    max-width: 172px;
    min-height: 100vh;
    -webkit-box-shadow: 3px 0px 12px -2px rgba(0,0,0,0.20);
    -moz-box-shadow: 3px 0px 12px -2px rgba(0,0,0,0.20);
    box-shadow: 3px 0px 12px -2px rgba(0,0,0,0.20);
    z-index: 1;
}

#sidebar .sidebar-header {
    padding: 30px;
    padding-left: 10px;
    padding-top: 60px;
    img {
        margin-left: 3.2rem !important;
    }
}

#sidebar ul {
    padding-top: 50px;
}
#sidebar ul p {
    color: #fff;
    padding: 10px;
}

#sidebar ul li a {
    padding-bottom: 28px;
    font-size: 12pt;
    display: block;
    color: $white;
    text-align: left;
    margin-left: 30px;
    opacity: 0.7;
}
#sidebar ul li a:hover {
    text-decoration: none;
    opacity: 1;
}

li {
    position: relative;
}

.sidebar-profile {
    padding: 30px;
    padding-left: 10px;
    padding-top: 100px;
    img {
        border-radius: 50%;
        height: 50px;
        margin-left: 2.5rem !important;
    }
    h4 {
        margin-top: 18px;
        color: $white;
        font-size: 14px;
        text-align: center;
    }
}
.router-link-exact-active {
    color: $white !important;
    opacity: 1 !important;
}
.router-link-exact-active::before  {
content: '';
  background:url('../assets/img/activeclass.png');
  width:28px; /* width of the image */;
  height: 37px; /* height of the image */;
  display: block;
  position: absolute;
  margin-top: -8px;
  margin-left: -38px;
}
</style>