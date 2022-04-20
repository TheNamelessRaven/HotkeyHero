<div class="container mt-3">
<h1>Regisztrálj<h1>
    
<form action="<?php base_url();?>regisztracio" method="POST">
    <div class="form-group col-md-12 text-center">
            <input type="text" class="form-control" id="username" name="username"placeholder="Felhasználónév"required>
      </div>
      <div class="form-group col-md-12 text-center">
            <input type="password" class="form-control" id="password" name="password" placeholder="Jelszó"required>
      </div>
      <div class="form-group col-md-12 text-center">
            <input type="password" class="form-control" id="password" name="password_conf" placeholder="Jelszó megerősítése"required>
      </div>
      <div class="form-group col-md-12 text-center">
            <input type="text" class="form-control" id="email" name="email" placeholder="email"required>
      </div>
      <div class="form-group col-md-12 text-center">
            <a class="link-danger" href="<?php base_url();?>agreement">Feltételek</a>
            <input type="checkbox" class="form-control" id="agree" name="agree" required>
      </div>
      <div class="form-group col-md-12 text-center">
    <button type="submit" class="btn btn-primary" name="regisztral" value="true">Regisztráció</button>
</div>
</form>
</div>