<div class="container" >
<H1>Ez lenne a ranglista!</H1>
<table class="table-dark">
  <thead>
    <tr>
      <th scope="col"class="h1">Helyezés</th>
      <th scope="col"class="h1">Felhasználó</th>
      <th scope="col"class="h1">Nehezsegi fokozat</th>
      <th scope="col"class="h1">Pálya</th>
      <th scope="col"class="h1">Pontok</th>
    </tr>
  </thead>
  <tbody>
<?php
        if($fetch_data->num_rows() > 0)
        {
          foreach($fetch_data->result() as $row)
          {
            ?>
            <tr>
              <td>
              <?php 
              $i=0;
              if($row->username!=null){
                echo $i+1;
              }
                  ?>
              </td>
              <td><?php echo $row->username; ?></td>
              <td><?php echo $row->Difficulty_name; ?></td>
              <td><?php echo $row->map_name; ?></td>
              <td><?php echo $row->Points; ?></td>
            </tr>
            <?php
          }
        }
        else
        {
        ?>
        <tr>
          <td colspan="3">Nem található data</td>
        </tr>
        <?php
        }
        ?>
</tbody>
</table>
</div>