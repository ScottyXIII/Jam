@extends('templates.master')

@section('styles')
    <link href="css/carousel.css" rel="stylesheet"> 

@stop

@section('scripts')

    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <script src="js/ContactFormDropDown.js" type="text/javascript"></script>
    <script src="js/functions.js" type="text/javascript"></script>

@stop


@section('title', 'Jam Electrical')

@section('content')
    
    @include('includes.carosel')

    

     <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
 <div id="wrapper" class="top-section">
    <div id="bod-wrap" class="container"> <!-- /.container -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div id="three-sections" class="row">
                <div class="col-lg-4">
                    <div class="container img-circle no-padding" style="width:70px; height:70px;">
                        <span id="header-icon" class="glyphicon glyphicon-ok" style="right:3px;"> </span>
                    </div>
                    <h2>Why Choose JamElectrical</h2>
                    <p>With over 20 years experience as an electrician, Jam Electrical provides high quality and professional electricians.
                        Jam Electrical is a family run business providing a fast, reliable and friendly service
                        All work carried out is to a high standard and will be completed to NAPIT standard and compliance with Heath & safety regulations.</p>
                    <p><a class="btn btn-warning" href="about.php" role="button">About us &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="container img-circle no-padding" style="width:70px; height:70px;">
                        <span id="header-icon" class="glyphicon glyphicon-wrench"> </span>
                    </div>
                    <h2>Our Services</h2>
                    <ul style="list-style:none; padding:0;">
                        <li>Upgrade fuse boards. </li>
                        <li>Extra sockets & lights. </li>
                        <li>Outdoor lighting. </li>
                        <li>P.A.T Testing. </li>
                        <li>Fault finding. </li>
                        <li>PIR reports. </li>
                        <li>Re-wires. </li>
                    </ul>
                    <p><a class="btn btn-warning" href="services.php" role="button">Our services &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <div class="container img-circle no-padding" style=" width:70px; height:70px;">
                        <span id="header-icon" class="glyphicon glyphicon-thumbs-up"> </span>
                    </div>
                    <h2>Get a free quote!</h2>
                    <p>We will provide you with a quote free of charge! just fill out our contact for with as much detial as posible and we will contact you with a quote or 
                        arrange to inspect a job before we can give a quote, depending on the work requied. If you would prefer to speak to a member of our team then please contact us to discuss further works.   </p>
                    <p><a class="btn btn-warning" href="contact.php" role="button">Contact us &raquo;</a></p>
                </div><!-- /.col-lg-4 -->


            </div>
            

              @include('includes.endorsments')

        </div>
        <!-- Google +1 --> 
        <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
        <g:plusone></g:plusone>
        <!-- END Google +1 -->  

        <!-- START THE FEATURETTES -->
    </div></div>
     <hr id="location-section" class="featurette-divider">
      <div id="wrapper" class="location-section" >
    <div id="bod-wrap" class="container"> 
        <div class="container">

           

            <div class="row featurette">
                    <blockquote> <h1 class="featurette-heading" style="margin:0;">We are located in <span class="text-muted">Dagenham Essex </span></h1>
                        <p class="lead"> We cover all areas around <span class="text-muted"> Essex </span>, <span class="text-muted"> London </span>, <span class="text-muted"> Cambridge </span>, <span class="text-muted"> Cambridge </span> and all areas with a 50 mile radius.  </p>
                        <p> Please feel free to <a id="contact-link" href="#" > contact us </a> if you are unsure that we cover your area </p>
                    </blockquote> 
                 
                    <iframe style="margin-top:70px;" width="100%" height="400px" frameborder="0" scrolling="no"src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=51+New+Road,+Dagenham,+United+Kingdom&amp;aq=0&amp;oq=51+New+Road,+dagen,+United+Kingdom&amp;sll=51.54649,-0.012005&amp;sspn=0.231867,0.676346&amp;t=h&amp;ie=UTF8&amp;hq=&amp;hnear=51+New+Rd,+Dagenham+RM10+9NH,+United+Kingdom&amp;ll=51.536619,0.151148&amp;spn=0.016016,0.036478&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
               
               
            </div>
        </div>
    </div></div>
        <hr class="featurette-divider">

         <div id="wrapper" class="family-section" style="background-color:#F9F9F9">
    <div id="bod-wrap" class="container"> 
        <div class="row featurette">
            <div class="col-md-12">

                <blockquote> <h2 class="family-section-heading text-left" style="margin:0;">A Family run business
                 <span class="text-muted">You can rely on.</span></h2> </blockquote>
 
                <p class="lead text-right" style="padding:50px;"> We pride ourselfs in being a small family business and provide a professional service for our customers. Don't just take out 
                word for it, <span class="text-muted"> Read what our customer's have to say about J@m Electrical! </span>  </p>

                <div class="row">


                   <div class="panel panel-default">
            <div class="panel-heading">
              <h3>Customer Testimonials</h3>
            </div>
            <div class="panel-body"> <p id="quotes"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis pharetra varius quam sit amet vulputate. 
              
              Quisque mauris augue, molestie tincidunt condimentum vitae, gravida a libero. Aenean sit amet felis 
              
              dolor, in sagittis nisi. Sed ac orci quis tortor imperdiet venenatis. Duis elementum auctor accumsan. 
              
              Aliquam in felis sit amet augue.</p> 
                <p id="itallics"> </p>
              <div style="margin-top:5px;">
                            <button type="button" class="btn btn-default"> View more testimonails </button>
                            <button type="button" class="btn btn-default"> Add a testimonail </button>
                        </div> </div>
       
            </div>

            
            </div>
</div>


        </div>
    </div></div>

        <hr class="featurette-divider">

   <div id="wrapper" class="helpus-section">
    <div id="bod-wrap" class="container"> 
        <div class="row featurette">
            <div class="text-left"> <h2 class="featurette-heading" style="margin:30px 0 60px 0;"> Help <span class="text-muted">J@m Electrical</span> grow by recomending us and sharing our site </h2> </div>
            <div class="col-md-7">
                <h2 class="featurette-heading">Follow us on <span class="text-muted">Facebook</span> and leave a comment </h2>

                <div class="fb-like" data-href="https://www.facebook.com/Jasonandmandyelectrical" data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div>
                <h2 class="featurette-heading">Recomend us to <span class="text-muted">Google</span> </h2>
                <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
                <g:plusone></g:plusone>
            </div>
            <div class="col-md-5">
                <div class="fb-like-box" data-href="https://www.facebook.com/Jasonandmandyelectrical" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div> 
            </div>
        </div>
    </div></div>
        <hr class="featurette-divider">


@endsection