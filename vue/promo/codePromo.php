<div class="container">
 <table class="table table-bordered table-striped">
 
  <tr>
   <th>Nom du code</th>
   <th>% de reduction</th>
   <th>Nombre restant</th>
   <th>Nom evenement</th>
   <th>Supprimer</th>
   <!-- <th>Code</th> -->


  </tr>
    <?php foreach ($codes as $code): ?>
    <?php 
    if($code['code_datsup'] == null){ ?>
   <tr>
      <td><?= $code['code_nom']; ?></td>
      <td><?= $code['code_taux_reduc']; ?> %</td>
      <td><?= $code['code_nb']; ?></td>
      <td><?= $code['ev_libelle']; ?></td>

		  
			
			<td><a href="index.php?route=suprCode&idcode=<?= $code['code_id']; ?>" type="button" class="btn btn-primary">
     <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
      </a>
      </td>
      <?php
     } ?>

      

      
  </tr>
 <?php endforeach ?>
 </table>
</div>
