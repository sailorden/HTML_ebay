/*$(document).ready(
	
	function () {
	
		CKEDITOR.disableAutoInline = true;
		var depro = [];
		var isEditingEnabled = [];
			    
		 $('.buttons_interface_textarea').click(function(){
		 	
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
				
				$.post(
        		base_url+'app/update_input_text/'+id_template+'/'+id_html,
        		{id:id,table:"html",value: description.innerHTML,id_html: id_html},
        		function(returndata){
					description.innerHTML = returndata;
				}
				);
				
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
 		
 		$('.buttons_interface_text').click(function(){
 			
 			var id = $(this).attr('id');
 			var text = document.getElementById( 'text_'+id );
 			var inner = text.innerHTML;
		
 			if(isEditingEnabled[id]){
 				this.innerHTML = '<i class="fa fa-pencil"></i>';
	 			text.innerHTML = document.getElementById( 'input_'+id ).value; 
	 			isEditingEnabled[id] = false;	
				
				$.post(
        		base_url+'app/update_input_text/'+id_template+'/'+id_html,
        		{id:id,table:"html",value: text.innerHTML,id_html: id_html},
        		function(returndata){
					text.innerHTML = returndata;
				}
				);
				
 			}else{
 				
	 			this.innerHTML = '<i class="fa fa-save"></i>';
	 			text.innerHTML = '<input type="text" class="input_toggle" id="input_'+id+'" value="'+ inner +'"/>'; 	
	 			isEditingEnabled[id] = true;
 			}
 					
 		});
 });*/
