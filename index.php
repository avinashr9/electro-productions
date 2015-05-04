<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
	 <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Including Favicon -->
    <link rel="shortcut icon" type="image/png" href="_img/favicon.png"/>

    <!-- Bootstrap css file-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Adding font-awesome css -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Including FancyBox CSS file-->
    <link rel="stylesheet" href="fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />

    <!-- External CSS file -->
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!-- jQuery (Required for bootstrap javascript plugin) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

    <!-- Bootstrap javascript plugins -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <!-- Fancybox Javascript files-->
    <script type="text/javascript" src="fancybox/source/jquery.fancybox.pack.js"></script>

    <!-- Font awesome JavaScript files-->
    <script type="text/javascript" src="fancybox/source/helpers/jquery.fancybox-media.js"></script>

    <!-- External JavaScript file-->
	<script type="text/javascript" src="js/jquery.nav.js"></script>
    <script src="js/script.js"></script>

    <!--[if lt IE 9]>
      <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->

    <title>Electro Productions</title>
  </head>

  <body>

    <!-- Fixed Navigation Bar at the top of the page-->	
    <nav id="header" class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <a href="#home" class="navbar-brand">Electro Productions</a>
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav navbar-right" id="nav">
            <li class="current"><a href="#home">Home</a></li>
            <li><a href="#portfolio">Portfolio</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </nav>
   
   <!-- Background video -->
    <div class="section-wrapper-home" id="home" >
      <div class="section">
	    <div class="videoContainer" >
          <video id="video1" autoplay loop muted  > 
            <source src="video/demo.mp4" type="video/mp4" />
          </video>
          <div class="logoOnVideo hidden-xs">
            <img src="_img/main_logo.png" alt="Company Logo" class="vidLogo"/>
          </div>
          <div class="videoFooter">
	        <div class="demoButton">
              <a class="fancybox-media btn btn-primary" href="https://vimeo.com/57239949"> View our Demo Reel </a>
            </div>
	      </div>
	    </div>
	  </div>
	</div>

    <!--contact email status modal -->
	   <!-- modal -->
	   <div class="modal fade" id="submitModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel"></h4>
          </div>
          <div class="modal-body Message">
            <p id="Message"> </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
	<!-- modal -->

	 <?php if( isset($_GET["status"] ) AND $_GET["status"]=="true"){ ?>
         <script> 
             $('#myModalLabel').text("We'll get back to you shortly");	 
		    $('#Message').text("Thank you for contacting us! Please check your mailbox for the confirmation email.Check your spam folder also.");
		  $('#submitModal').modal('show');
		 </script>
	 <?php }else if( isset($_GET["status"] ) AND $_GET["status"]=="false") { ?>
	   <script>
	    $('#myModalLabel').text("Sorry Send Failed :(");
	    $('#Message').text("There is some problem in seding e-mail from here.Please try to reach ryan@electroproductions.com");
	    $('#submitModal').modal('show');
	   
	   </script>
	 <?php } ?>
	<!-- end of email status -->

    <!-- Portfolio -->
	<div class="section-wrapper" id="portfolio">
    <div id="portfolio1">
      <div class="section">
        <div  class="container">
          <h2>OUR RECENT WORK!</h2>
	      <div class="container">
	        <div id="wrapper" >

              <div class ="imagetile">
                <div class="imageinside">
                  <a class="fancybox-media" href="https://vimeo.com/122709634">
                    <img src="_img/a.jpg" alt="Demo Video Link: Leverage Global Partners"/>
                  </a>
	              <div class="titleBox">Leverage Global Partners</div>
                </div>
              </div>

		      <div class ="imagetile">
                <div class="imageinside">
                  <a class="fancybox-media" href="https://vimeo.com/32875604">
                    <img src="_img/b.jpg" alt="Demo Video Link: Vitamin Gaint"/>
                  </a>
	              <div class="titleBox">Vitamin Gaint</div>
                </div>
              </div>

		      <div class ="imagetile">
                <div class="imageinside">
                  <a class="fancybox-media" href="https://vimeo.com/32881586">
                    <img src="_img/c.jpg" alt="Demo Video Link: Bull Dog"/> 
                  </a>
	              <div class="titleBox">Bull Dog</div>
                </div>
              </div>

		      <div class ="imagetile">
                <div class="imageinside">
                  <a class="fancybox-media" href="https://vimeo.com/60720086">
                    <img src="_img/d.jpg" alt="Demo Video Link: Vestar Hot Rolling Mill"/> 
                  </a>
	              <div class="titleBox">Vestar Hot Rolling Mill</div>
                </div>
              </div>

		      <div class ="imagetile">
                <div class="imageinside">
                  <a class="fancybox-media" href="https://vimeo.com/58598273">
                    <img src="_img/e.jpg" alt="Demo Video Link: Super Bowl 2012"/> 
                  </a>
	              <div class="titleBox">Super Bowl 2012</div>
                </div>
              </div>

		      <div class ="imagetile">
                <div class="imageinside">
                  <a class="fancybox-media" href="https://vimeo.com/58578407">
                    <img src="_img/f.jpg" alt="Demo Video Link: Apacks"/> 
                  </a>
	              <div class="titleBox">Apacks</div>
                </div>
              </div>

		      <div class ="imagetile">
                <div class="imageinside">
                  <a class="fancybox-media" href="https://vimeo.com/57239949">
                    <img src="_img/g.jpg" alt="Demo Video Link: SMC"/> 
                  </a>
	              <div class="titleBox">SMC</div>
                </div>
              </div>

		      <div class ="imagetile">
                <div class="imageinside">
                  <a class="fancybox-media" href="https://vimeo.com/42194275">
                    <img src="_img/h.jpg" alt="Demo Video Link: Up from here"/> 
                  </a>
	              <div class="titleBox">Up from Here</div>
                </div>
              </div>

	        </div>
	      </div>
	    </div> 
      </div>
      </div>
	</div>

    <!-- Services -->
    <div class="section-wrapper" id="service">
    <div id="service11">
      <div class="section">
	    <div  class="container">
          <h2>WHAT WE DO?</h2>
          <div class="row text-center features">

            <div class="col-md-3 col-sm-5 col-xs-12">
              <div class="cursor_style">
                <i class="glyphicon glyphicon-edit"></i>
                <h3>PRE-PRODUCTION</h3>
              </div>
              <div id="service1" class="hide_service">
                <ul class="list-unstyled">
                  <li>Service1</li>
                  <li>Service2</li>
                  <li>Service3</li>
                </ul>
              </div>
            </div>

            <div class="col-md-3 col-sm-5 col-sm-offset-1 col-xs-12 col-md-offset-0">
              <div class="cursor_style">
                <i class="glyphicon glyphicon-facetime-video"></i>
                <h3>PRODUCTION</h3>
              </div>
              <div id="service2" class="hide_service">
                <ul class="list-unstyled">
                  <li>Service1</li>
                  <li>Service2</li>
                  <li>Service3</li>
                  <li>Service4</li>
                </ul>
              </div>
            </div>

            <div class="col-md-3 col-sm-5 col-xs-12 ">
              <div class="cursor_style">
                <i class="glyphicon glyphicon-play-circle"></i>
                <h3>POST-PRODUCTION</h3>
              </div>
              <div id="service3" class="hide_service">
                <ul class="list-unstyled">
                  <li>Service1</li>
                  <li>Service2</li>
                </ul>
              </div>
            </div>

            <div class="col-md-3 col-sm-5 col-sm-offset-1 col-xs-12 col-md-offset-0">
              <div class="cursor_style">
                <i class="glyphicon glyphicon-inbox"></i>
                <h3>SERVICES</h3>
              </div>
              <div id="service4" class="hide_service">
                <ul class="list-unstyled">
                  <li>Service1</li>
                  <li>Service2</li>
                  <li>Service3</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
    </div>

    <!-- About -->
	<div class="section-wrapper" id="about" >
      <div class="section">
	    <div  class="container">
          <h2>WHO ARE WE?</h2>
	    </div>
  
	    <div class="container">
    	  <div class="row">
	        <div  class= " col-md-3 col-sm-4 col-xs-12 ">
              <img src="_img/logo.png" alt="Company Logo" class="abtLogo"/>
              <!-- TO DO: Add company Logo-->
	        </div>

		    <div  class= " col-md-9 col-sm-8 col-xs-12">
		      <h4>Electro Productions Inc. </h4>
    		  <p>Electro Productions brings experience from feature films into projects that may not have expected such treatment. What does this mean for you? It means attention to detail, professionalism and an exceptional product every time. Our developers have directed projects of every shape and size – from individual Web video spots to multi-million dollar film productions. Whatever your needs, we can work with you to develop the perfect solution. Electro Productions is dedicated to social and community betterment. We have always used our talents to support area non-profits, but with the opening of our new location, we will also dedicate five percent of each project to the service organization of the client’s choice. Please contact us for more information.</p>
		    </div>
  	      </div>
	    </div>

	    <div class="container">
	      <div class="row">
	        <div  class= " col-md-3 col-sm-4 col-xs-12 ">
		      <img  src="_img/ryan.jpg" alt="Ryan Juskiewicz, founder of Electro Productions" class="pic"/>
	        </div>

  	        <div class= " col-md-9 col-sm-8 col-xs-12">
	          <h4> Ryan Juskiewicz</h4>
	          <p>Ryan has been working in the film industry since 1995. He received his bachelor's degree in Film studies from Columbia College and his Masters in Digital Cinema from DePaul University. His career began with a role as 1st Assistant Director on the feature film, “A Piece of Eden.” Subsequently, he moved to Dallas where he was 1st AD and line producer and 2nd unit director on independent films and also worked as a photographer/writer for the “Dallas Music Guide”.</p>

	          <p>Seeing the potential in Indiana and Chicago for a high quality film production company, he returned to the Midwest and began working as a Director and Director of Photography on many commercials, music videos, industrials and short films. He has also worked as an Adjunct Professor, teaching Film/Video Production and Film History. He is simultaneously working on a feature-length documentary about Ibrahim Parlak, a Turkish national under investigation by Homeland Security. The working title of the film is “Gulistan: The Ibrahim Parlak Story".</p> 

              <p>His work with Electro Productions began because of his goal to bring cutting-edge, film quality production techniques and standards to regional companies, non-profits and creative projects.</p>
  	        </div>
		  </div> 
	    </div>
      </div>
    </div>

     <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Derrick White</h1>
              <h3>Operations Director at Teleplan International</h3>
              <p><em>"Ryan is at once a creative visionary and grounded business owner. During the brief time that I worked with Ryan at Electro Productions, I watched him consistently turn out product after product at a level of excellence that I thought would be impossible given some of the budgets we were working with. The bottom line is that this guy achieves a level of excellence in his work that none of his competitors can match, and he does it in such an efficient way that his customers can’t find a better value anywhere else in the marketplace. Would I work with Ryan again if the opportunity presents itself? Absolutely."</em></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Gary Pethe</h1>
              <h3>WMFD Radio ESPN Wilmington Sports Producer, UNC-Wilmington Athletics at Sunrise Broadcasting</h3>
              <p><em>"Ryan is a creative visualizer in video production challenges ... always interested in finding new and different ways of doing things, apart from the ordinary."</em></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Phil Patnaude</h1>
              <h3>Adjunct Faculty at Indiana University South Bend</h3>
              <p><em>"Ryan has always been very interested in quality video production. He continues to expand his horizons. He would be a great asset to any production."</em></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
	<!-- /.carousel -->

    <!-- Contact Us -->
    <div class="section-wrapper" id="contact">
    <div id = "contact1">
      <div class="section">	  
	    <div  class="container">
          <h2>GET IN TOUCH!</h2>
	    </div>

	    <div class="container">
	      <div class="row">
	        <div class="col-xs-12 col-sm-12 col-md-4 ">
              <!-- form -->
		      <form class="form-horizontal" id="contactform" role="form" method="post" action="send_email.php">
		        <div class="form-group">
                  <span id="name_validate" class="help-block hide_service validate">* Please enter a valid name.</span>
			      <label  for="name" class= "control-label col-sm-2 contactLabels">Name</label>
				  <div class="col-sm-10">
				    <input  type="text" class= "form-control" id="name" name="name" placeholder= "Name"  required data-validation-required-message="Please enter your name" >
			      </div>
			    </div>

			    <div class="form-group">
                  <span id="email_validate" class="help-block hide_service validate">* Please enter a valid Email address.</span>
			      <label for="email" class="control-label col-sm-2  contactLabels">Email </label>
				  <div class="col-sm-10">
				    <input type="email" id="email" name="email" class="form-control" placeholder ="Email Address" required data-validation-required-message="Please enter your email address" >
			      </div> 
			    </div>

			    <div class="form-group">
                  <span id= "phne_validate" class="help-block hide_service validate">* Please enter a valid phone number.</span>
			      <label for= "phone" class="control-label col-sm-2 contactLabels">Phone </label>
				  <div class="col-sm-10">
				    <input type="tel" class="form-control" placeholder="Phone Number" id="phone" name="phone" required data-validation-required-message="Please enter your contact number" >
			      </div>
			     </div>

			     <div class="form-group">
			       <label for="message" class="control-label col-sm-2 contactLabels">Message </label>
			       <div class="col-sm-10">
			         <textarea  rows="5" id="message" name="message" placeholder="Write your message here" class="form-control" required data-validation-required-message="Please enter your Message name" ></textarea> 
			       </div>
			     </div>

			     <div class="form-group">
                   <div class="col-sm-offset-2 col-sm-10">
                     <button id="submitBtn" type="submit" class="btn btn-primary">Send</button>
                   </div>
                 </div>
		      </form>
	        </div>
            <!-- contact details-->
	        <div class=" col-xs-12 col-sm-12 col-md-6 col-md-offset-2 contactPad">
				   <div  class="row">
				     <h3 class="contactDetails"> Contact Details!! </h3>
				     <div class= "col-xs-6 col-sm-6 col-md-1"> <i class="glyphicon glyphicon-home"></i></div>
				     <div class=" col-xs-6 col-sm-6 col-md-4">
				      <p>Electro Productions Inc</p> 
				        <p>704 Fox Street </p>
				          <p>La Porte, IN 46350</p>
				     </div>
				   </div>
				   <div class="row">
				     <div class= "col-xs-6 col-sm-6 col-md-1"><i class="glyphicon glyphicon-phone"></i> </div>
				     <div class=" col-xs-6 col-sm-6 col-md-4">
				       <p> 219-608-1833 </p>
					 </div>
				   </div >
		    </div>
			<!-- end -->
          </div>
	    </div>  
      </div>
      </div>
    </div>

    <!-- Footer -->
	<footer id="footer" >
        	<div class="container align-center">
            	<ul class="social-icon">
            		<li><a target="_blank" href="https://www.linkedin.com/in/electroproductions" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a target="_blank" href="https://www.facebook.com/juszkiewicz" class="facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a target="_blank" href="" class="twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a target="_blank" href="https://vimeo.com/electroproductions" class="vimeo"><i class="fa fa-vimeo-square"></i></a></li>
                </ul>
                <div class="spacing40"></div>
            	<p>Copyright © Electro productions Inc.</p>
            </div>
    </footer>

  </body>
</html>