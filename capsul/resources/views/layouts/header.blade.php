<section class="hero is-light is-bold is-medium">
  <!-- Hero head: will stick at the top -->
  <div class="hero-head">
    <nav class="navbar">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item">
            <img src="https://bulma.io/images/bulma-type-white.png" alt="Logo">
          </a>
          <span class="navbar-burger burger" data-target="navbarMenuHeroA">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navbarMenuHeroA" class="navbar-menu">
          <div class="navbar-end">
            <!-- <a class="navbar-item is-active">
              Home
            </a>
            <a class="navbar-item">
              About
            </a>
            <a class="navbar-item">
              Map
            </a> -->

                <router-link tag="a" to="/" exact>
                    <a class="navbar-item">Home</a>
                </router-link>
                <router-link tag="a" to="/about" exact>
                    <a class="navbar-item">About</a>
                </router-link>
                <router-link tag="a" to="/map" exact>
                    <a class="navbar-item">Map</a>
                </router-link>
    
            <span class="navbar-item">
              <a class="button is-light is-inverted">
                <span>Log In</span>
              </a>
            </span>
          </div>
        </div>
      </div>
    </nav>
  </div>

  <!-- Hero content: will be in the middle -->
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title islight">
        Capsul Manhattan
      </h1>
      <h2 class="subtitle">
        Photography Time Capsule
      </h2>
    </div>
  </div>

  <!-- Hero footer: will stick at the bottom -->
  <div class="hero-foot">
      @include('layouts.nav')
  </div>
</section>
