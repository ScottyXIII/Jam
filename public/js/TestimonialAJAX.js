window.onload = function() {
	
	FadingTestimonials();							//Call once before looping. 
	setInterval(FadingTestimonials,20000);			//20000ms = 20seconds  
}; 

function FadingTestimonials()
{
	$.ajax(
	{
		//dataType: 'json',
		url:"testimonialsFromClients.php" ,
		success: function(value) {
			//On success fade in.
			var result = JSON.parse(value);			//2D array returned. 1st = quote number, 2nd = aaociativ arry - ['quote'],['client']
			var testimonial = result['quote'];
			var client = result['client'];
			
			$("#quotes, #itallics").fadeOut('slow', function(){
				
				$("#quotes").html(testimonial);
				$("#itallics").html(client);
				$(this).fadeIn('slow');
				
			});
			
		
			
			
		}
	});
	
}