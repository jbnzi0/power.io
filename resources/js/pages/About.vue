<template>
  <div>
    <div class="page-header page-header-small clear-filter" filter-color="orange">
      <parallax
        class="page-header-image"
        style="background-image: url('img/wallpaper-about.jpeg')"
      >
      </parallax>
      <div class="content-center">
        <div class="container">
         
          <div class="text-center">
             <h1 class="title">Expanding our knowledge, finding new answers</h1>
          </div>
        </div>
      </div>
    </div>
    <div class="section section-about-us">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <img src="img/schema.png" alt="">
            <h2 class="title">About us.</h2>
            <p align="left">
            
              Several diverse groups are tied into the Design Research Lab network: As a team, we investigate future perspectives for a digital society, its ramifications, and policies for inclusive and sustainable development. We believe in participatory design and invite different groups of people to join our research endeavors in order to reflect on their individual experiences, hopes, and constraints. Furthermore, we work with interventions, cultural hacking and design explorations as research methods to address today’s challenges in a different way. Besides the professorship for design research at the College of Architecture, Media and Design at the Berlin University of the Arts, The Weizenbaum Institute investigates the current changes in all aspects of society occurring in response to digitalization. 

              The goals are to develop a comprehensive understanding of these changes based on rigorous academic analysis and to offer informed strategies to address them at a political and economic level. The Design Research Lab is involved with two research groups. Within the Einstein Center Digital Future Prof. Dr. Gesche Joost is principal investigator for the topic of digital humanities and society. For the DFKI the Interactive Textiles research group builds on extensive expertise in the field of concept development for electronic textiles and wearable technology and is dedicated to the design and analysis of portable interfaces based on textile materials and production techniques. Using the methods of interdisciplinary and participative design research, projects are developed around human-machine interaction with wearables and soft interfaces. 
            </p>
          </div>
        </div>
        <div class="separator separator-primary"></div>
       
      </div>
    </div>
   
  </div>
</template>
<script>
import { Button, FormGroupInput } from '../components';
export default {
  name: 'about',
  bodyClass: 'labout-page',
  components: {
    [Button.name]: Button,
    [FormGroupInput.name]: FormGroupInput
  },
  data() {
    return {
      form: {
        firstName: '',
        email: '',
        message: ''
      }
    };
  }
};
</script>
<style></style>
