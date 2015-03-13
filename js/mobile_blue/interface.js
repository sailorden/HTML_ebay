var LoadButtonShow = {
	
	ButtonShow : function() {
        	
        $('.buttons_interface').show(); 
        $('input').show();
           
    },
	
};

var ClickActionButton = {
	
		HideShowButtons : function() {
        	
            $('#eye').click(ClickActionButton.ButtonsHide);
            $('#eye-slash').live('click', ClickActionButton.ButtonsShow);
           
        },

        ButtonEditText : function() {
        	
            $('.buttons_interface.text').click(ClickActionButton.TextUp);
            $('.buttons_interface.textarea').click(ClickActionButton.TextAreaUp);
           
        },
        
        ButtonEditImage : function() {
        	
            $('.image').change(ClickActionButton.ImageUp);
            $('.images').change(ClickActionButton.ImagesUp);
           
        },
        
        ButtonModalForm : function() {
        	
            $('#modal_form').click(ClickActionButton.ModalForm);
           
        },
        
        ButtonsHide : function() {
        	
            $('.buttons_interface').hide(); 
        	$('input').hide();
        	$('#eye').empty();
        	$('#eye').append('<i class="fa fa-eye-slash"></i>');
        	$('#eye').attr('id','eye-slash');
           
        },
        
        ButtonsShow : function() {
        	
            $('.buttons_interface').show();
        	$('input').show();
        	$('#eye-slash').empty();
        	$('#eye-slash').append('<i class="fa fa-eye"></i>');
        	$('#eye-slash').attr('id','eye');
           
        },

        ImageUp : function(){

        	var id = $(this).attr('id');
        	var file = document.getElementById(id).files[0];
        	var table = $(this).attr('hspace');
        	var folder_template = $('#folder_template').val();
        	var folder_image = $(this).attr('dir');
        	var id_html = $('#id_html').val();
        	var src = $('img.'+id).attr('src').split("/");
        	var max_width = $('img.'+id).attr('width');
        	var max_height = $('img.'+id).attr('height');
        	$('.'+id).empty();
        	$('.'+id).append('<img src="'+base_url+folder_template+'/image/loading.png" />');
        	
			var data = new FormData();
			data.append('file',file);
			data.append('id',id);
			data.append('table',table);
			data.append('folder_template',folder_template);
			data.append('folder_image',folder_image);
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
					
					var result = JSON.parse(data).split('.');
					
					if(result[1] == "jpg" || result[1] == "jpeg"){
						
						$('.'+id).empty();
						$('.'+id).append('<i class="fa fa-camera"></i>');
						$('img.'+id).attr('src',base_url+src[4]+'/'+src[5]+'/'+JSON.parse(data));
	
					}else{

						$(function(){
							
							$('.'+id).empty();
							$('.'+id).append('<i class="fa fa-camera"></i>');
							$('body').append(JSON.parse(data));
							$( "#dialog-message" ).dialog({
								modal: true,
								buttons: {
									Ok: function() {
										$( this ).dialog( "close" );
									}
								}
							});
							
						});
					}
						
			});
        	
        },
        
        ImagesUp : function(){
        	
        	alert('imagen');
        },
        
        ModalForm : function(){
        	
        	var dir = $(this).attr('dir'); 
        	
        	$(function(){
						
				$('#form-'+dir).show();
				$('#form-'+dir).dialog({
					modal: true,
					width: 600,
					height: 700,
					resizable: false,
				});
				
			});
        },
        
        TextUp : function() {
        	
        	var id = $(this).attr('id');
 			var text = document.getElementById( 'text_'+id );
 			var inner = text.innerHTML;
		
 			if(isEditingEnabled[id]){
 				this.innerHTML = '<i class="fa fa-pencil"></i>';
	 			text.innerHTML = document.getElementById( 'input_'+id ).value; 
	 			isEditingEnabled[id] = false;	
	 			
	 			var table = $(this).attr('hspace');
	 			var id_table = $(this).attr('dir');
				
				$.post(
        		base_url+'app/update_input_text/'+id_template+'/'+id_html,
        		{id:id,table: table, id_table: id_table, value: text.innerHTML,id_html: id_html},
        		function(returndata){
					text.innerHTML = returndata;
				}
				);
				
 			}else{
 				
	 			this.innerHTML = '<i class="fa fa-save"></i>';
	 			text.innerHTML = '<input type="text" class="input_toggle" id="input_'+id+'" value="'+ inner +'"/>'; 	
	 			isEditingEnabled[id] = true;
	 			
	 			var input = document.getElementById( 'input_'+id );
	 			var tmpStr = input.value;
	 			
				input.focus();
				input.value = '';
				input.value = tmpStr;
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
				
				var table = $(this).attr('hspace');
				var id_table = $(this).attr('dir');
				
				$.post(
        		base_url+'app/update_input_text/'+id_template+'/'+id_html,
        		{id:id,table: table, id_table: id_table, value: description.innerHTML,id_html: id_html},
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
$(window).load(ClickActionButton.HideShowButtons);
$(window).load(ClickActionButton.ButtonModalForm);



