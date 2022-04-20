<div class="container mt-3">
<?php if($this->session->userdata('user')==NULL):?>
<h1>Bejelentkezes<h1>
    <form action="<?php base_url();?>belepes" method="POST">
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
<?php else:?>
<H1>Üdvözöllek az oldalamon!</H1>
<?php endif;?>
</div>