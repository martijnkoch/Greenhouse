<template>
  <div class="login-form">
    <h2 class="login-heading">Login</h2>
    <form action="#" @submit.prevent="login">

      <div class="form-control">
        <label for="email">Username/Email</label>
        <input type="email" name="username" id="username" class="login-input" v-model="username">
      </div>

      <div class="form-control mb-more">
        <label for="password">Password</label>
        <input type="password" name="password" id="password" class="login-input" v-model="password">
      </div>

      <div class="form-control">
        <button type="submit" class="btn-submit">Login</button>
      </div>

    </form>
  </div>
</template>

<script type="text/javascript">
/* eslint-disable */
	export default {
		methods: {
			login(){
				 this.$http.post('http://localhost:81/api/login',{
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