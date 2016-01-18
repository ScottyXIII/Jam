/* 

 * To change this license header, choose License Headers in Project Properties.

 * To change this template file, choose Tools | Templates

 * and open the template in the editor.

 */



$("* #contact-link").click(function(event) {
	event.preventDefault();
        
        
        var some_html = '<img src="pictures/logo3.png" width="300px"/><br /><br />';
        some_html += '<h4>You can also contact us via phone on 07903839055 </h4> <br />';
           some_html += '\
		 <form role="form" style="margin-top: 15px;">	<div class="form-group">	\
        <label for="name">Name</label>	\
        <input type="text" class="form-control" id="name" placeholder="Your name">	\
        </div>	\
        <div class="form-group">\
        <label for="address">Contact Details</label>\
        <input type="text" class="form-control" id="address" placeholder="Your number">\
        </div>\
        <div class="form-group">\
        <label for="details">Details</label>\
        <textarea class="form-control" rows="5" name="details"></textarea>\
        </div>\
        </form>'
   
    bootbox.dialog({
  message: some_html,
  buttons: 
  {
    send: 
    {
      label: "Send email",
      className: "btn-primary",
      callback: function() 
      {
          ContactFormCallback ();
          sendMailFromDropDown(); 
        
          closeButton: true;
      }
    },
    exit: 
    {
        label: "Exit",
        className: "btn-primary",
        callback: function() 
        {
           closeButton: true;
        }
    }
  }
});
    /* if($(".slide-form").length < 1) 

        slideContactForm();
     */
});

function ContactFormCallback () { 
    
    $("#formCallback").delay(400).fadeIn().delay(5000).fadeOut();
}


function slideFormUp() {

    $('.slide-form').animate({"top":-400},"slow",function(){

        $('.slide-form').remove();

    

    });

	

}

	

function slideContactForm() {

    //If form element dosn't exsit create it

    var form = $(document.createElement("div")).addClass("well slide-form col-xs-4 col-md-4");

        form.html('<span class="pull-right" style="position:absolute; top:5px; right:5px;" href="#"><img src="pictures/logo3.png" height="50" > </span> \
		 <form role="form" style="margin-top: 15px;">	<div class="form-group">	\
        <label for="name">Name</label>	\
        <input type="text" class="form-control" id="name" placeholder="Your name">	\
        </div>	\
        <div class="form-group">\
        <label for="address">Contact Details</label>\
        <input type="text" class="form-control" id="address" placeholder="Your number">\
        </div>\
        <div class="form-group">\
        <label for="details">Details</label>\
        <textarea class="form-control" rows="5" name="details"></textarea>\
        </div>\
        <button type="submit" class="btn btn-default">Submit</button>\
		<button type="button" onclick="slideFormUp()" class="btn btn-default">Close</button>\
        </form>');	

    

     //Prepend var form to the DOM and center.   

    $( form ).prependTo("body");

    var screnCenter = $(document).width() / 2;

    var centerFormPos = screnCenter;
	var forpPosY =  $(document).scrollTop() - 600; 
    centerFormPos = centerFormPos - (form.width() / 2) ;    

    form.css("position", "absolute");
    form.css("top",forpPosY) ;
    form.css("z-index", "1000");

    form.css("left",centerFormPos);

 	$(".slide-form").css("position", "fixed");


    alignCenter();
	
    form.animate({"top":100},"slow","linear", function (){

        //On finish 

       
       $(".slide-form").css("margin-top", 30);

    });



}



//Keep in center on window resize.  

$(window).resize(function() {

    alignCenter();

    

});

 

function alignCenter() {

   var c = $('.slide-form').width();

    c = c/2; 

    var screnCenter = $(document).width() / 2;

    var centerFormPos = screnCenter;

    centerFormPos = centerFormPos - c;

    $('.slide-form').css("left",centerFormPos);

    

}