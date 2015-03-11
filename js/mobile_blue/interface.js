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
        	$('.'+id).empty();
        	$('.'+id).append('<img src="'+base_url+folder_template+'/image/loading.png" />');
        	
			var data = new FormData();
			data.append('file',file);
			data.append('id',id);
			data.append('table',table.pop());
			data.append('folder_template',folder_template);
	
			$.ajax({
				
				url: base_url+'app/up_load_image',
				type:'POST',
				contentType:false,
				data:data,
				processData:false,
				cache:false
				
				}).done(function(data) {
					
					
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



