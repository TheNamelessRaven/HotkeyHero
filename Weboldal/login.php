<?php
$menu="login";
?>

<form method="POST">
<div class="form-group col-md-12 text-center">
            <input type="text" class="form-control" id="username" name="username"placeholder="Felhasználónév"required>
      </div>
      <div class="form-group col-md-12 text-center">
            <input type="password" class="form-control" id="password" name="password" placeholder="Jelszó"required>
      </div>
      <div class="form-group col-md-12 text-center">
      <button type="submit" class="btn btn-primary" name="login" value="true">Belépés</button>
</div>
</div>
</form>