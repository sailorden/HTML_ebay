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
        	
            $('.buttons_interface.text').live('click',ClickActionButton.TextUp);
            $('.buttons_interface.textarea').live('click',ClickActionButton.TextAreaUp);
           
        },
        
        ButtonEditImage : function() {
        	
        	
        	
            $('.image').change(ClickActionButton.ImageUp);
            $('.images').change(ClickActionButton.ImagesUp);
            $('.image_delete').click(ClickActionButton.ImageDelete);
            
           
        },
        
        ButtonModalForm : function() {
        	

            $('#modal_form').live('click',ClickActionButton.ModalForm);
           
        },
        
        ButtonEditEach : function() {

            $('.buttons_interface.each').live('click',ClickActionButton.EachItem);
            $('.buttons_interface.style').live('click',ClickActionButton.StyleUp);
            $('#modal_form').click(ClickActionButton.ModalForm);
            $('.modal_form').live('click',ClickActionButton.ModalForm);

           
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
        
        
        ButtonsAdd : function() {
        	
            $('.buttons_interface.tab.add').live('click',ClickActionButton.TabUp);
            $('.buttons_interface.menu.add').live('click',ClickActionButton.MenuUp);
           
        },
        
        ButtonsDelete : function() {
        	
            $('.buttons_interface.tab.delete').live('click',ClickActionButton.TabDown);
            $('.buttons_interface.menu.delete').live('click',ClickActionButton.MenuDown);
           
        },
        
        TabUp : function() {

       		$.post(
	        		base_url+'app/add_new_tab/'+id_template,
	        		{id_html: id_html, table: 'tabs'},
	        		function(returndata){
	        			
	        			var json = JSON.parse(returndata);
						$("#horizontalTab").html(json);
						$('#horizontalTab').easyResponsiveTabs({
				            type: 'default', //Types: default, vertical, accordion           
				            width: 'auto', //auto or any width like 600px
				            fit: true   // 100% fit in a container
				        });
					}
				);
        },
        
        TabDown : function() {
        	
        	var id_table = $(this).attr('dir');

       		$.post(
	        		base_url+'app/delete_tab/'+id_template,
	        		{id_html: id_html, id_table: id_table, table: 'tabs'},
	        		function(returndata){
	        			
	        			var json = JSON.parse(returndata);
						$("#horizontalTab").html(json);
						$('#horizontalTab').easyResponsiveTabs({
				            type: 'default', //Types: default, vertical, accordion           
				            width: 'auto', //auto or any width like 600px
				            fit: true   // 100% fit in a container
				        });
					}
				);
        },
        
        MenuUp : function() {

       		$.post(
	        		base_url+'app/add_new_menu/'+id_template,
	        		{id_html: id_html, table: 'menu'},
	        		function(returndata){
	        			
	        			var json = JSON.parse(returndata);
						$("#menu_left").html(json[0]);
						$("#menu_left").append(json[1]);
					}
				);
        },
        
        MenuDown : function() {
        	
        	var id_table = $(this).attr('dir');

       		$.post(
	        		base_url+'app/delete_menu/'+id_template,
	        		{id_html: id_html, id_table: id_table, table: 'menu'},
	        		function(returndata){
	        			
	        			var json = JSON.parse(returndata);
						$("#menu_left").html(json[0]);
						$("#menu_left").append(json[1]);
					}
				);
        },

        ImageUp : function(){

        	var id = $(this).attr('id');
        	var file = this.files[0];
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
			if($(this).attr('accesskey')){
				
				data.append('id_item',$(this).attr('accesskey'));
			}
	
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
						$('.delete_'+id).show();
	
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
        
        ImageDelete : function(){
        	
        	var id = $(this).attr('id');
        	var table = $(this).attr('hspace');
        	var id_html = $('#id_html').val();
        	var src = $('img.'+id).attr('src').split("/");
        	var id_table = "";
        	
			if($(this).attr('accesskey')){
				
				id_table = $(this).attr('accesskey');
			}
	
			$.post(
	        		base_url+'app/delete_image/',
	        		{id_html: id_html, id_table: id_table, table: table, id: id},
	        		function(){
	        			$('img.'+id).empty();
	        			$('img.'+id).attr('src',base_url+src[4]+'/'+src[5]+'/');
	        			$('.delete_'+id).hide();
					}
				);
        },
        
        ModalForm : function(){
        	
        	var dir = $(this).attr('dir').split("_"); 
 			
        	$(function(){
						
				$('#form-'+dir[0]).show();
				$('#form-'+dir[0]).dialog({
					modal: true,
					width: dir[1],
					height: dir[2],
					resizable: false,
				});
				
			});
        },
        
        EachItem : function(){
        	
        	var table = $(this).attr('hspace'); 
        	var id_item = "";
        	if($(this).attr('accesskey')){id_item = $(this).attr('accesskey');}
        	$(this).empty();
			$(this).append('<img src="'+base_url+folder_template+'/image/loading.png" />');
        	$("#modal_form_"+table+id_item+" input[type=text]").each(function (index) {
        		
        		var id = $(this).attr('id');
        		var value = $(this).val();
        		
        		if (id_item == ""){
        		
	        		$.post(
		        		base_url+'app/update_each_item/'+id_template+'/'+id_html,
		        		{id:id,table:table, value:value},
		        		function(returndata){
							var json = JSON.parse(returndata);
							$(".content_"+table).html(json);
						}
					);
					
				}else{
					
					$.post(
		        		base_url+'app/update_each_item/'+id_template+'/'+id_html,
		        		{id:id,table:table, value:value, id_item:id_item},
		        		function(returndata){
							var json = JSON.parse(returndata);
							$(".content_"+table).html(json);
						}
					);
				}

        	});
        	
        	$('#form-'+table+id_item).dialog( "close" ); 
        	
        },
        
        StyleUp : function(){
        	
        	var table = $(this).attr('hspace');
        	$("#modal_form_style input[type=text]").each(function (index) {
        		
        		var id = $(this).attr('id');
        		var value = $(this).val();
        		
        		$.post(
	        		base_url+'app/update_style/'+id_template+'/'+id_html,
	        		{id:id,table:table, value:value},
	        		function(returndata){
						var json = JSON.parse(returndata);
						$("#style_html").html(json);
					}
				);

        	});
        	
        	$('#form-'+table).dialog( "close" ); 
        	//location.reload();
        	
        },
        
        TextUp : function() {
        	
        	var id = $(this).attr('id');
        	var text;
        	var id_table = $(this).attr('dir');
        	
        	if(id_table){
        		text = document.getElementById( 'text_'+id+'.'+id_table );
        	}else{
        		text = document.getElementById( 'text_'+id );
        	}
 			
 			var inner = text.innerHTML;
		
 			if(isEditingEnabled[id]){
 				this.innerHTML = '<i class="fa fa-pencil"></i>';
	 			text.innerHTML = document.getElementById( 'input_'+id ).value; 
	 			isEditingEnabled[id] = false;	
	 			
	 			var table = $(this).attr('hspace');
	 			id_table = $(this).attr('dir');
				
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
		 	var description;
		 	
		 	var id_table = id_table = $(this).attr('dir');
        	
        	if(id_table){
        		description = document.getElementById( 'dpro_'+id+'.'+id_table );
        	}else{
        		description = document.getElementById( 'dpro_'+id );
        	}
		 	
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
$(window).load(ClickActionButton.ButtonsAdd);
$(window).load(ClickActionButton.ButtonsDelete);
$(window).load(ClickActionButton.HideShowButtons);
$(window).load(ClickActionButton.ButtonModalForm);
$(window).load(ClickActionButton.ButtonEditEach);



