<template>
   <v-card
    class="mx-auto"
    max-width="250"
    contain
    outlined=false
  >
    <v-img
      src="https://www.drlab.org/wp-content/uploads/2019/10/gameli_adzaho-600x600-300x300.jpg"
      height="200px"
    ></v-img>

    <v-card-title>
      {{f_name}} {{l_name}}
    </v-card-title>
    <v-card-subtitle>
      {{profession}}
    </v-card-subtitle>

  

  </v-card>
</template>

<script>

export default {
    name: 'MemberCard',
    props: {
        profession: String,
        f_name: String,
        l_name: String,
    },
};
</script>
