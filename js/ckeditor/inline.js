$(document).ready(function () {
	
	CKEDITOR.disableAutoInline = true;
	var isEditingEnabled = false, depro,
	description = document.getElementById( 'dpro' );
		    
	 $('#toggle').click(function(){
	 	if(isEditingEnabled){
	 		if (depro){
				depro.destroy();
			}
	 		description.setAttribute( 'contenteditable', false );
			this.innerHTML = 'Start editing';
			isEditingEnabled = false;
	 	}else{
	 		if ( !CKEDITOR.instances.description ) {
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