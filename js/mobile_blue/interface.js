var LoadButtonShow = {
	
	ButtonShow : function() {
        	
        $('.buttons_interface').show();
           
    },
	
};

var ClickActionButton = {

        ButtonEditText : function() {
        	
            $('.buttons_interface.text').click(ClickActionButton.TextUp);
           
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
        	
        	/*$.post(
        		base_url+'app/up_load_image',
        		{id:id,table:table.pop()},
        		function(returndata){
					$('.'+id).html(returndata);
				}
		    );*/
        },
        
        ImagesUp : function(){
        	
        	alert('imagen');
        },
        
        TextUp : function() {
        	
        	alert('text');
        },

};

$(window).load(LoadButtonShow.ButtonShow);
$(window).load(ClickActionButton.ButtonEditImage);
//$(window).load(ClickActionButton.ButtonEditText);



