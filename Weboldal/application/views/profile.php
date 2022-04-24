<div class="container table-dark">
<H1 class="table-dark">Profil: </H1>
<form  action="<?php base_url();?>profile" method="post">
<?php  foreach($fetch_data->result() as $row)
          {
            echo "<h1>Név:$row->username</h1>";
            echo "<H1>Email:$row->email</h1>";
            echo "<button class='p' type='submit' value='true' name='newpass'> Új Jelszót kérek!</button>";

            if(isset($_POST['newpass'])){
                echo "<input type='password'    name='pw'  placeholder='új jelszó'>";
                echo "<input type='password'    name='pw2' placeholder='új jelszó megerősítése'>";   
                echo"<button class='p' type='submit' value='true' name='confirm'>Megerősítés</button>";
                if(strcasecmp('pw', 'pw2')==0 && isset($_POST['confirm'])){
                echo "A jelszavak egyeznek!";
                }
                else{
                    //echo "A jelszavak nem egyeznek";
                }
    
            }

            }
          
            ?>
</form> 
