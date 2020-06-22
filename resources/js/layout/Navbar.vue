<template>

  <navbar
    position="fixed"
    type="primary"
    :transparent="transparent"
    :color-on-scroll="colorOnScroll"
    menu-classes="ml-auto"
  >
    <template>
        Power.io
    </template>
    <template slot="navbar-menu">
      <li class="nav-item">
        <router-link class="nav-link" to="/">
          HOME
        </router-link>
      </li>

      <li class="nav-item">
        <router-link class="nav-link" to="/about">
        ABOUT
        </router-link>
      </li>

      <li class="nav-item">
         <a class="nav-link" href="#">
          <p>MEMBERS</p>
        </a>
      </li>

      <li class="nav-item">
         <a class="nav-link" href="#">
          <p>PUBLICATIONS</p>
        </a>
      </li>

       <li class="nav-item">
         <a class="nav-link" href="#">
          <p>AWARDS</p>
        </a>
      </li>
      <li class="nav-item">
        <router-link class="nav-link" to="/login">
        
          Login
        </router-link>
      </li>
     

     
    </template>
  </navbar>
</template>

<script>
import {  NavbarToggleButton, Navbar, NavLink } from '../components';
import { Popover } from 'element-ui';
export default {
  name: 'main-navbar',
  props: {
    transparent: Boolean,
    colorOnScroll: Number
  },
  components: {
    Navbar,
    NavbarToggleButton,
    NavLink,
    [Popover.name]: Popover
  }
};
</script>

<style scoped></style>
