<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
  <img src="logo.png" class="img-circle"width="150" height="50"> 
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link <?php echo $menu=='home' ?> active" aria-current="page" href="index.php?menu=home">Főoldal</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $menu=='register' ?>" href="index.php?menu=register">Regisztráció</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $menu=='login' ?>"href="index.php?menu=login">Belépés</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo $menu=='download' ?>" href="index.php?menu=download">Letöltés</a>
        </li>
        
    </div>
  </div>
</nav>