<?php if ($menu): ?>
	
	<div class="menu_box">
	  	<h3 class="menu_head"><?= $html->name_menu ?></h3>
	     <ul class="nav">
	     	
	     	<?php foreach ($menu as $key => $value): ?>
				 
				 <li><a href="<?= $value->link_menu ?>"><?= $value->name_menu ?></a></li>
				 
			 <?php endforeach ?>
	     	
	   	 </ul>
	</div>
	
<?php endif ?>


