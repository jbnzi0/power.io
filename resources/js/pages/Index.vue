<template>
<div class="container">
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
              
            </div>
          </div>
        </div>
      </div>
    </div>
   
  </div>
</template>
<script>
import Parallax  from '../components/Parallax'

export default {
  name: 'index',
  bodyClass: 'index-page',
  components: {
    Parallax
  }
};
</script>
<style>
</style>
