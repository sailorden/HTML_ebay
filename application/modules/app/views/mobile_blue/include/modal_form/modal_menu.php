<div style="display: none" id="<?= 'form-menu-'.$value->id_menu ?>" title="Editar Menú">
	
<form role="form">
  <div class="form-group">
    <label for="name_menu">Nombre</label>
    <input size="47" hspace="menu" type="text" name="name_menu" id="name_menu" value="<?= $value->name_menu ?>">
    
    <label for="link_menu">Link</label>
    <input size="47" hspace="menu" type="text" name="link_menu" id="link_menu" value="<?= $value->link_menu ?>">
  </div>
  <button class="buttons_interface text" style="" hspace="html"><i class="fa fa-save"></i></button>
</form>

</div>


