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

        ImageUp : function(){
        	
        	var id = $(this).attr('id');
        	var table = id.split("_");
        	$('.'+id).empty();
        	$('.'+id).append('<img src="'+base_url+folder_template+'/image/loading.png" />');
			alert(id);
			$('#'+id).uploadify({
				id:id,
		        table:table.pop(),
		       	uploader:'app/up_load_image',		
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



