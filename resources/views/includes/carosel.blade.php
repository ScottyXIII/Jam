    <!-- Carousel
    ================================================== -->

    <div id="Header"> 
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <?php $loop = 0; ?>
                <?php foreach ($images->CaroselImages()->get() as $image): ?> 
                    <div class="<?php if ($loop == 0) echo "item active"; else echo "item"; ?>">
                    <img src="images/<?php echo $image->name; ?>" alt="First slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Fully Qualified Electrician.</h1>
                            <p>With over 20 years experience Jam electrical provides a high standard of work. View our portfolio for more details</p>
                            <p><a class="btn btn-lg btn-primary" href="portfolio.php" role="button">View Portfolio</a></p>
                        </div>
                    </div>
                    </div>
                <?php endforeach; ?> 

                <div class="item">
                    <img src="images/logo.png" alt="Second slide">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Essex and London area.</h1>
                            <p>We cover a wide range of areas around Essex and London. Please contact us if you live outside this area, we do cover other areas. </p>
                            <p><a class="btn btn-lg btn-primary" href="contact.php" role="button">Contact Us </a></p>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <img src="images/logo.png" alt="Third slide">
                    <div class="container"> 
                        <div class="carousel-caption">
                            <h1>Electrical Services.</h1>
                            <p>J@m electrical specialise in a range of services from fault diagnosics, re-wires and electrical repairs. See a full list of our services </p>
                            <p><a class="btn btn-lg btn-primary" href="services.php" role="button">Our Services</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
        </div><!-- /.carousel -->
    </div>