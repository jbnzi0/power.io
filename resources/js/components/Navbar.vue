<template>
    <div>
          <!-- Navbar -->
   
  <!-- /.navbar -->


  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="/img/logo.png" alt="Powerio logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Power.io</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/img/pp.jpg" class="img-circle elevation-2" alt="Cobra Bubbles">
        </div>
        <div class="info">
          <a href="#" class="d-block"> {{ name }}</a> <!-- Will be the name of the connected user-->
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <router-link to="/dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </router-link>
          </li>

          <li class="nav-item">
            <router-link to="/users" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
              <p>
                Researchers
              </p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/publications" class="nav-link">
            <i class="nav-icon fas fa-newspaper" area-hidden="true"></i>
              <p>
                Publications
              </p>
            </router-link>
          </li>

          <li class="nav-item">
            <router-link to="/awards" class="nav-link">
            <i class="nav-icon fas fa-trophy" area-hidden="true"></i>
              <p>
                Awards
              </p>
            </router-link>
          </li>   
          
          <li class="nav-item">
            <router-link to="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Profile
              </p>
            </router-link>
          </li>

          <li class="nav-item">
            <router-link to="/home" class="nav-link">
            <i class="nav-icon fas fa-home" area-hidden="true"></i>
              <p>
                Home
              </p>
            </router-link>
          </li>

        <router-link to="/home" class="nav-link" @click.prevent="logout">
            <i class="nav-icon fas fa-power-off"></i>
            Logout
        </router-link>
     
        
      </ul>


      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

    </div>
</template>

<script>
export default {
    name: 'dashbar',
    data: () => ({
        csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
        }),
    methods:{
        logout:function(){
            axios.post('logout').then(responsse => {
                if(response.status === 302 || 401)
                    console.log('logout');
                else
                    console.error('error');
                }).catch(error => {
                    console.error(error);
                    
                });
            }
        }
    
}
</script>