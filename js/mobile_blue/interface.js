var LoadButtonShow = {
	
	ButtonShow : function() {
        	
        $('.buttons_interface').show();
           
    },
	
};

var ClickActionButton = {
	
		
	
        ButtonEditText : function() {
        	
            $('.buttons_interface').click(ClickActionButton.slideCb);
           
        },
        
        ButtonEditImage : function() {
        	
            $('.buttons_interface').click(ClickActionButton.slideCb);
           
        },

        slideCb : function() {
        	
        				alert('hola'); 
        		},

};

$(document).ready(
	
	LoadButtonShow.ButtonShow,
	ClickActionButton.ButtonEditText
	
);
