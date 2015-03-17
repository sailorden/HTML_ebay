<?php if ($menu): ?>
	
  	<div class="menu_head">
  		<?php if (!isset($downloadable_version)): ?>
  			<button id="name_menu" <?php if (!isset($is_change)): ?>style="display: none;"<?php endif ?> hspace="html" class="buttons_interface text"><i class="fa fa-pencil"></i></button>
  		<?php endif ?> 
  		<h3 id="text_name_menu" class="menu_head"><?= $html->name_menu ?></h3>
  		
	</div>
     <ul class="nav">
     	
     	<?php foreach ($menu as $key => $value): ?>
			 
			 <li>
			 	<a href="<?= $value->link_menu ?>"><?= $value->name_menu ?></a>
			 	
			 	<?php if (!isset($downloadable_version)): ?>
					<button id="modal_form" dir="menu<?= $value->id_menu ?>_600_400" name="<?= $value->id_menu ?>" <?php if (!isset($is_change)): ?>style="display: none;"<?php endif ?> class="buttons_interface menu edit modal_form">
						<i class="fa fa-pencil"></i></button>
					<button id="delete_menu" dir="<?= 'id_menu.'.$value->id_menu ?>" <?php if (!isset($is_change)): ?>style="display: none;"<?php endif ?> class="buttons_interface menu delete">
						<i class="fa fa-remove"></i></button>
				<?php endif ?> 
		 	</li>

		 <?php endforeach ?>
		 
		 <?php if (!isset($downloadable_version)): ?>
		 
		 	<li class="button"><button id="add_menu" <?php if (!isset($is_change)): ?>style="display: none;"<?php endif ?> class="buttons_interface menu add"><i class="fa fa-plus"></i></button></li>
		 		
		 <?php endif ?> 
     	
   	 </ul>
	  
	  <?php if (!isset($downloadable_version)): ?>
	  	 	
		 <?php if(!$this->input->is_ajax_request()) : ?>
	
		 	<?php $this->load->view('include/modal_form/modal_menu') ?>
		 
		<?php endif ?> 
		
	<?php endif ?> 
	
<?php endif ?>
