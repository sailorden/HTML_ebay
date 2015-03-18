<div style="padding-top: 5em;" class="container">
  <table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Nombre</th>
      <th>Ver</th>
      <th>Borrar</th>
    </tr>
  </thead>
  <tbody>
  	
  	<?php foreach ($htmls as $key => $value): ?>
		  
	    <tr>
	      <td><?= $value->id_html ?></td>
	      <td><?= $value->name_html ?></td>
	      <th><?=  anchor('app/html/'.$value->idTemplate.'/'.$value->id_html, '<i class="fa fa-eye"></i>','title="Ver"') ?></th>
	      <th><?=  anchor('app/delete_html/'.$value->id_html, '<i class="fa fa-trash"></i>','title="Borrar"') ?></th>
	    </tr>
    
    <?php endforeach ?>
    
  </tbody>
  </table>
</div>