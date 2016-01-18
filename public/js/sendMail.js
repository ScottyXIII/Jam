/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 

function sendMail() {
    
    var data = {
        //Grab data from contact form we want to send to php script.
       
        name: $("#name").val(),
        address: $("#address").val(),
        number: $("#number").val(),
        email: $("#email").val(),
        message: $("#message").val(),
        dropdownForm: 0
    };
      
     
    
    $.ajax(
	{
		//dataType: 'json',
                type: "POST",        
                data: data,
		url:"php/sendEmail.php" ,
		success: function(value) {
			//On success add returned html to the  ontact form. 
                   //Add mailReturn to the form, just before the send button. 
                    $('#sendButton').before(value);    
                    //Fade in for asthetics
                    $('#mailReturn').fadeIn("slow");
                      
                      
                    //Clear data fields on our form. 
                    $("#name").val("");
                    $("#address").val("");
                    $("#number").val("");
                    $("#email").val("");
                    $("#message").val("");      
                   
                 // alert(value); 
			
		
			
			
		}
	});
}

function sendMailFromDropDown() {
    
    var data = {
        //Grab data from contact form we want to send to php script.
       
        name: $("#name").val(),
        address: $("#address").val(),
        number: $("#number").val(),
        email: $("#email").val(),
        message: $("#message").val(),
        dropdownForm: 1 
    };
      
     
    
    $.ajax(
	{
		//dataType: 'json',
                type: "POST",        
                data: data,
		url:"php/sendEmail.php" ,
		success: function(value) {
                    //On success add returned html to the  ontact form. 
                    //Add mailReturn to the form, just before the send button. 
                     
                
                    //Clear data fields on our form. 
              
                         
                            
                             
			
		
			
			
		}
	});
}