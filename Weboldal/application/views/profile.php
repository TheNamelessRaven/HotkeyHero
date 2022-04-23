<?php //$this->session->userdata('user')?>
<div class="container table-dark">
<H1 class="table-dark">Profil:</H1>
<p id="user_text">Név:

    <?php
    $this->db->select('SELECT username FROM user');
    $query = $this->db->get('user');
    echo $query; 
    ?> </p>

<p>
    <form  action="<?php base_url();?>profile" method="post">
<input type="password" placeholder="jelszó" name="password">
<input type="password" name="password_change"  placeholder="új jelszó">
<input type="password" name="password_change2" placeholder="új jelszó megerősítése">
<button class="submit bg-success text-white" value="true"name="pw_change" onclick="password()">Jelszó módosítás: </button>
</form> </p>
<p id="user_text">Email: </p>

</dic>