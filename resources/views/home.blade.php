@extends('templates.master')

@section('scripts')
   
    <script src="js/ContactFormDropDown.js" type="text/javascript"></script>

    <script> 
    //Re draw page to fix Chrome bug of font awsome and social media icons not showing until mouse hover
    $(document).ready(function(){
      var oldOffset = $('body').offset();
      $('body').offset(oldOffset);
    });
    </script>

@stop 

@section('title', 'Contact Jam Electrical')

@section('content')
    <!-- Contact Body  -->
 </div>
   <div class="container" style="margin-top:50px;"> 
    <h1 class="page-header"> Contact Us </h1>
  
   
  
  <!-- Contact Form -->
  <div class=" col-md-7"> 
   <div class="well well-sm">
    <h3> Please contact us if you have any queries </h3>
    <hr > 
    <form id="contact-form" role="form" method="post">
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Your name">
      </div>
      <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" placeholder="Your address">
      </div>
      <div class="form-group">
        <label for="address">Contact Number</label>
        <input type="text" class="form-control" id="number" placeholder="Your number">
      </div>
       <div class="form-group">
        <label for="address">Contact Email</label>
        <input type="text" class="form-control" id="email" placeholder="Your Email">
      </div>
      <div class="form-group">
        <label for="details">Details</label>
        <textarea class="form-control" rows="5" id="message" name="message"></textarea>
      </div>
        <button id="sendButton" type="button" class="btn btn-default" onclick="sendMail()">Submit</button>
    </form>
   </div>
  </div>
  <!-- End Contact Form-->

  <!-- Contact details -->
  <div class="col-md-5">
   <div class="panel panel-warning">
    <div class="panel-heading"> <p> Address </p> </div>
    <div class="panel-body"> 
     
     <address>
      <strong>Jam Electrical.</strong><br>
      51 New Road <br>
      Dagenham, 
      Essex, 
      RM10 9NH<br>
      Phone: 07903839055
     </address>
 
     <address>
      <strong>Jason Manning</strong><br>
      <a href="mailto:Jason@JamElectrical.com">Jason@JamElectrical.com</a>
     </address> 
    </div>
   </div>
  </div>
  <!-- End contact details -->
        
      </div>
        <hr class="divider" /> 
       
     <div>
 <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
<g:plusone></g:plusone> 

 </div> 

@endsection