var ClickActionButton = {
	
        ButtonEditText : function() {
        	
            $('.floating_buttons').click(ClickActionButton.slideCb);
           
        },
        
        ButtonEditImage : function() {
        	
            $('.floating_buttons').click(ClickActionButton.slideCb);
           
        },

        slideCb : function() {
        	
        				alert('hola'); 
        		},

};

$(document).ready(ClickActionButton.ButtonEditText);

