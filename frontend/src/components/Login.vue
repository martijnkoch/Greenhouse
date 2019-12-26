<template>
<div class="wrapper loginpage">
  <div class="row background">
    <div class="offset-md-6">
      <form action="#" @submit.prevent="login" autocomplete="off">
        <div class="row mt-5 pt-4 pl-3 mt-5">
          <b-col lg="8" md="6" sm="12" class="mb-2">
            <h2>Hello streamer!</h2>
            <h3>Welcome back</h3>
          </b-col>
          <b-col lg="3" md="6" sm="12">
            <img src="@/assets/img/GHG-logo-purple_RGB copy.png"/>
          </b-col>
        </div>
        <div class="form-control pl-3">
          <input type="email" name="username" id="username" class="login-input" placeholder="Email" v-model="username">
        </div>

        <div class="form-control mb-more pl-3">
          <input type="password" name="password" id="password" class="login-input" placeholder="Password" v-model="password">
        </div>

        <div class="form-control ml-auto p-2 mt-1 pl-3">
          <button type="submit" class="btn-submit float-right mr-3">Sign in</button>
        </div>

      </form>
      <div class="forgot-pw pt-5">
        <a href="#" class="text-center">Forgot your password?</a>
      </div>
    </div>
  </div>
</div>
</template>

<script type="text/javascript">
/* eslint-disable */
	export default {
		methods: {
			login(){
				 this.$http.post('http://localhost:8888/api/login',{
					username: this.username,
					password: this.password
				})
				.then(response => {
					this.$router.push('/dashboard');
				}).catch(error => {
					console.log(error);
				})
			}
		},
		data(){
			return {
				username: "",
				password: ""
			}
		}
	}
</script>

<style lang="scss">
@import "../assets/css/variables.scss";
.loginpage {
  background: rgb(88,13,137);
  background: linear-gradient(90deg, rgba(88,13,137,1) 0%, rgba(80,16,123,1) 70%, rgba(68,20,100,1) 100%);
  height:100vh;
}
.forgot-pw {
  height: 105px;
  background-color: $grey;
  border-radius:0px 0px 23px 23px;
  width: 400px;
  a{
    text-align: center;
  }
}
  form {
    height: 230px;
    background-color: $white;
    width: 400px;
    border-radius: 23px 23px 0px 0px;
    .form-control{
      background: $white;
      border: 0px;
      
    }
    h2 {
      color: $dark;
      font-size: 23pt;
      font-weight: 600;
    }
    h3 {
      color: $gh-purple;
      font-size: 20pt;
    }
    input[type="email"], input[type="password"]{
      background-color: $grey;
      border: none; /* <-- This thing here */
      border-radius: 50px;
      height: 30px;
      width: 240px;
      padding: 0.375rem 0.75rem;
    }
    input[type="email"]::placeholder, input[type="password"]::placeholder{
      color: $gh-purple;
      font-size: 12pt;
    } 
    button {
      height: 50px;
      color: $white;
      background-color: $gh-purple;
      border: none; /* <-- This thing here */
      border-radius: 50px;
      width: 120px;
    }
  }
</style>
