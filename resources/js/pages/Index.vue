<template>
  <div>
   <navbar v-bind:colorOnScroll="400" ></navbar>

    <div class="page-header clear-filter" filter-color="orange">
      <parallax
        class="page-header-image"
        style="background-image: url('img/meteor-wall.jpg')"
      >
      </parallax>
      <div class="container">
        <div class="content-center brand">
          <img class="n-logo" src="img/robot_logo.png" alt="" />
          <h1 class="h1-seo" style="font-weight: normal;">What if solving one problem could unlock solutions to thousands more?</h1>
         

        </div>
      </div>
      
    </div>
  
    <div class="main">
      <div class="section section-images">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="hero-images-container">
                <img src="img/hero-image-1.png" alt="" />
              </div>
              <div class="hero-images-container-1">
                <img src="img/hero-image-2.png" alt="" />
              </div>
              <div class="hero-images-container-2">
                <img src="img/hero-image-3.png" alt="" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
   <Footer backgroundColor="black"></Footer>
   
  </div>
</template>
<script>
import { Parallax } from '../components'
import Button from '../components/BootstrapVue/Button'
import Navbar from '../layout/Navbar'
import Footer from '../layout/Footer'
export default {
  name: 'index',
  bodyClass: 'index-page',
  components: {
    Parallax,
    Button,
    Navbar,
    Footer
  }
};
</script>
<style></style>
