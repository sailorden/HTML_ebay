$(document).ready(
	
	function () {
	
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
 	}
 
 );
 
 
 $(document).ready(function () {
 	
 		var isEditingEnabled = [];
 		
 		$('.toggle_text').click(function(){
 			
 			var id = $(this).attr('id');
 			var text = document.getElementById( 'text_'+id );
 			var inner = text.innerHTML;
		
 			if(isEditingEnabled[id]){
 				this.innerHTML = '<i class="fa fa-pencil"></i>';
	 			text.innerHTML = document.getElementById( 'input_'+id ).value; 
	 			isEditingEnabled[id] = false;	
 			}else{
 				
	 			this.innerHTML = '<i class="fa fa-save"></i>';
	 			text.innerHTML = '<input type="text" class="input_toggle" id="input_'+id+'" value="'+ inner +'"/>'; 	
	 			isEditingEnabled[id] = true;
 			}
 					
 		});
 });
