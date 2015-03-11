var LoadButtonShow = {
	
	ButtonShow : function() {
        	
        $('.buttons_interface').show();
        $('input').show();
           
    },
	
};

var ClickActionButton = {

        ButtonEditText : function() {
        	
            $('.buttons_interface_text').click(ClickActionButton.TextUp);
            $('.buttons_interface_textarea').click(ClickActionButton.TextAreaUp);
           
        },
        
        ButtonEditImage : function() {
        	
            $('.image').change(ClickActionButton.ImageUp);
            $('.images').change(ClickActionButton.ImagesUp);
           
        },

        ImageUp : function(event){
        	
        	var id = $(this).attr('id');
        	var file = document.getElementById(id).files[0];
        	var table = id.split("_");
        	var folder_template = $('#folder_template').val();
        	var folder_image = $('#folder_image').val();
        	var id_html = $('#id_html').val();
        	var src = $('img.'+id).attr('src').split("/");
        	var max_width = $('img.'+id).attr('width');
        	var max_height = $('img.'+id).attr('height');
        	$('.'+id).empty();
        	$('.'+id).append('<img src="'+base_url+folder_template+'/image/loading.png" />');
        	
			var data = new FormData();
			data.append('file',file);
			data.append('id',id);
			data.append('table',table.pop());
			data.append('folder_template',folder_template);
			data.append('id_html',id_html);
			data.append('max_width',max_width);
			data.append('max_height',max_height);
	
			$.ajax({
				
				url: base_url+'app/up_load_image',
				type:'POST',
				contentType:false,
				data:data,
				processData:false,
				cache:false
				
				}).done(function(data) {
					
					if(data == 'false'){
						
						//algo error
						
					}else{
						
						$('.'+id).empty();
						$('.'+id).append('<i class="fa fa-camera"></i>');
						$('img.'+id).attr('src',base_url+src[4]+'/'+src[5]+'/'+JSON.parse(data));
					}
						
			});
        	
        },
        
        ImagesUp : function(){
        	
        	alert('imagen');
        },
        
        TextUp : function() {
        	
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

       },
       
       TextAreaUp : function(){
       	
       		CKEDITOR.disableAutoInline = true;
        	
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
        },

};

$(window).load(LoadButtonShow.ButtonShow);
$(window).load(ClickActionButton.ButtonEditImage);
$(window).load(ClickActionButton.ButtonEditText);



