<template>
  <div class="page-header clear-filter" filter-color="orange">
    <div
      class="page-header-image"
      style="background-image: url('img/wallpaper-login.jpg')"
    ></div>
    <div class="content">
      <div class="container">
        <div class="col-md-5 ml-auto mr-auto">
          <card type="login" plain>
            <div slot="header" class="logo-container">
              <img class="n-logo" src="img/robot_logo.png" alt="" />
            </div>
            <fg-input
              class="no-border input-lg"
              placeholder="Email"
            >
            </fg-input>

            <fg-input
              class="no-border input-lg"
              placeholder="**********"
            >
            </fg-input>

            <template slot="raw-content">
              <div class="card-footer text-center">
                <!-- Handle connexion like Laravel-->
                <router-link class="btn btn-primary btn-round btn-lg btn-block" to="/about"> 
                Sign in
                </router-link>
              
              </div>

             
            </template>
          </card>
        </div>
      </div>
    </div>
    <main-footer></main-footer>
  </div>
</template>
<script>
import { Card, Button, FormGroupInput } from '../components';
import Footer from '../layout/Footer';
export default {
  name: 'login-page',
  bodyClass: 'login-page',
  components: {
    Card,
    Footer,
    [Button.name]: Button,
    [FormGroupInput.name]: FormGroupInput
  }
};
</script>
<style></style>
