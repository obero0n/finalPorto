<nav class="navbar navbar-expand-lg navbar-light bg-light position-fixed container col-12 ">
  <a class="navbar-brand" href="#">
    <img src="public/img/onglet.png" border=0 width=40 height=40 class="rounded-circle" alt="">
  </a>
  <button id="floatingDiverButton" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-around" id="navbarNavAltMarkup">
    <div class="navbar-nav">

<div class="row mr-3">
  <i class="fas fa-anchor mr-3"></i>
  <a class="nav-item nav-link p-0 mr-3" <?php setHref("addProject"); ?>>Add project</a>
</div>
<div class="row mr-3">
  <i class="fas fa-anchor mr-3"></i>
  <a class="nav-item nav-link p-0 mr-3" <?php setHref("updateProject"); ?>>Update project</a>
</div>
<div class="row mr-3">
  <i class="fas fa-anchor mr-3"></i>
  <a class="nav-item nav-link p-0 mr-3" <?php setHref("updateBio"); ?>>Bio</a>
</div>
<div class="row">
  <i class="fas fa-anchor mr-3"></i>
  <a class="nav-item nav-link p-0" <?php setHref("allProjects"); ?>>All Projects</a>
  <i class="fas fa-anchor ml-3 d-none d-xl-block d-lg-block"></i>
</div>
    </div>
  </div>
</nav>

<div class="navDiver d-none d-xl-block d-lg-block" id="floatingDiver">
  <img src="public/img/diver_f.png" alt="">
</div>
