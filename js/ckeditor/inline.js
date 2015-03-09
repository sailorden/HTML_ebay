$(document).ready(function () {
	
	CKEDITOR.disableAutoInline = true;
	var depro;
	var isEditingEnabled = false;
		    
	 $('.toggle').click(function(){
	 	
	 	var id = $(this).attr('id');
	 	var description = document.getElementById( 'dpro_'+id );
	 	
	 	if(isEditingEnabled){
	 		if (depro){
				depro.destroy();
			}
	 		description.setAttribute( 'contenteditable', false );
			this.innerHTML = 'Start editing';
			isEditingEnabled = false;
	 	}else{
	 		if ( !depro ) {
			 	depro = CKEDITOR.inline( description, {
					startupFocus: true
				} );
			}
			description.setAttribute( 'contenteditable', true );
			this.innerHTML = 'Finish editing';
			isEditingEnabled = true;
		}
	 });
 });
 
/*
 $(document).ready(function () {
	
	CKEDITOR.disableAutoInline = true;
	
	var isEditingEnabled = false, depro;
	//description = document.getElementById( 'dpro' );
		    
	 $('.toggle').click(function(){
	 	var id = $('.toggle').attr('id');
	 	
	 	if(isEditingEnabled){
	 		if (depro){
				depro.destroy();
			}
			
			//consloe.log($('#depro_'+id));
	 		$('#depro_'+id).setAttribute( 'contenteditable', false );
			this.innerHTML = 'Start editing';
			isEditingEnabled = false;
	 	}else{
	 		if ( !depro ) {
			 	depro = CKEDITOR.inline( $('#depro_'+id), {
					startupFocus: true
				} );
			}
			$('#depro_'+id).setAttribute( 'contenteditable', true );
			this.innerHTML = 'Finish editing';
			isEditingEnabled = true;
		}
	 });
 });
 */