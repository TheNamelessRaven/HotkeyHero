<?php
$menu="register";
?>
<h1>Regisztráció</h1>
<form method="POST">
      <div class="form-group col-md-12 text-center">
            <input type="text" class="form-control" id="username" name="username"placeholder="Felhasználónév"required>
      </div>
      <div class="form-group col-md-12 text-center">
            <input type="password" class="form-control" id="password" name="password" placeholder="Jelszó"required>
      </div>
      <div class="form-group col-md-12 text-center">
            <input type="password" class="form-control" id="password" name="password" placeholder="Jelszó"required>
      </div>
      <div class="form-group col-md-12 text-center">
            <input type="text" class="form-control" id="email" name="email" placeholder="email:"required>
      </div>
      <div class="form-group col-md-12 text-center">
            <a href="index.php?menu=feltetelek" class="link-danger <?php echo $menu=='conditions' ?>">Feltételek</a>
            <input type="radio" class="form-control" id="agree" name="agree" required>
      </div>
      <div class="form-group col-md-12 text-center">
    <button type="submit" class="btn btn-primary" name="regisztral" value="true">Regisztráció</button>
</div>
</form>