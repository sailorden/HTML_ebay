$(document).ready(function () {
	
	CKEDITOR.disableAutoInline = true;
	var depro = [];
	var isEditingEnabled = [];
		    
	 $('.toggle').click(function(){
	 	
	 	var id = $(this).attr('id');
	 	var description = document.getElementById( 'dpro_'+id );
	 	
	 	if(isEditingEnabled[id]){
	 		if (depro[id]){
				depro[id].destroy();
				depro[id] = null;
			}
	 		description.setAttribute( 'contenteditable', false );
			this.innerHTML = '<i class="fa fa-pencil"></i>';
			isEditingEnabled[id] = false;
	 	}else{
	 		if ( !depro[id] ) {
			 	depro[id] = CKEDITOR.inline( description, {
					startupFocus: true
				} );
			}
			description.setAttribute( 'contenteditable', true );
			this.innerHTML = '<i class="fa fa-save"></i>';
			isEditingEnabled[id] = true;
		}
	 });
 });
 