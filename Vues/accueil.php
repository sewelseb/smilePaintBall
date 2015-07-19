<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Sébastien de Beauffort">

    <title>SMILE paintball</title>

    <!-- Bootstrap Core CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- Fonts -->
	<link href="Vues/css/animate.css" rel="stylesheet" />
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- Squad theme CSS -->
    <link href="Vues/css/style.css" rel="stylesheet">
	<link href="Vues/color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom">
	<!-- JS facebook -->
	<div id="fb-root"></div>
		<script>(function(d, s, id) {
		  var js, fjs = d.getElementsByTagName(s)[0];
		  if (d.getElementById(id)) return;
		  js = d.createElement(s); js.id = id;
		  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.3&appId=288222224714486";
		  fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));
		</script>

	<!-- JS google annalytics -->
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-64911145-1', 'auto');
	  ga('send', 'pageview');

	</script>

	<!-- Preloader -->
	<div id="preloader">
	  <div id="load"></div>
	</div>

    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <h1><span class="texteJaune">SMILE team</span></h1>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#intro">Home</a></li>
        <li><a href="#theTeam">The team</a></li>
		<li><a href="#video">Video</a></li>
		<li><a href="#sponsors">Sponsors</a></li>
		<li><a href="#contact">Contact</a></li>

        <!-- <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
          <ul class="dropdown-menu">
            <li><a href="#">Example menu</a></li>
            <li><a href="#">Example menu</a></li>
            <li><a href="#">Example menu</a></li>
          </ul>
        </li> -->
      </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

	<!-- Section: intro -->
    <section id="intro" class="intro">
	
		<div class="slogan">
			<video autoplay loop poster="polina.jpg" id="bgvid">

				<!-- <source src="polina.webm" type="video/webm"> -->

				<source src="polina.mp4" type="video/mp4">

			</video>
			<h2>WELCOME TO <span class="text_color">SMILE</span> </h2>
			
					<h4 class="largeurMax">
						We are Media & Paintball Team.<br/>
						We promote the sport through videos of Scenario Big Games, players, teams and industry actors we media-cover for the world.<br/>

					</h4>
				
			
		</div>
		<div class="page-scroll">
			<a href="#theTeam" class="btn btn-circle">
				<i class="fa fa-angle-double-down animated"></i>
			</a>
		</div>
    </section>
	<!-- /Section: intro -->

	<!-- Section: about -->
    <section id="theTeam" class="home-section text-center">
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>THE TEAM</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
        <div class="row">
        	<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.2s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Guillaume</h5>
                        <p class="subtitle">Captain</p>
                        <div class="avatar"><img src="Vues/img/team/gui.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.4s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Mélissa</h5>
                        <p class="subtitle">Officer</p>
                        <div class="avatar"><img src="Vues/img/team/melissa.jpg" alt="" class="img-responsive img-circle" /></div>
                    </div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.6s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Jesse</h5>
                        <p class="subtitle">Officer</p>
                        <div class="avatar"><img src="Vues/img/team/jesse.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="0.8s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Mathias</h5>
                        <p class="subtitle">Sniper</p>
                        <div class="avatar"><img src="Vues/img/team/mathias.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
			<div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="1s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Pierre</h5>
                        <p class="subtitle">Gunner and support</p>
                        <div class="avatar"><img src="Vues/img/team/pierre.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="1.2s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Chris</h5>
                        <p class="subtitle">Assault</p>
                        <div class="avatar"><img src="Vues/img/team/chris.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
            
             <div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="1.4s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Seb</h5>
                        <p class="subtitle">Hacker and Assault</p>
                        <div class="avatar"><img src="Vues/img/team/seb.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
             <div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="1.6s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Bastien</h5>
                        <p class="subtitle">Gunner and support</p>
                        <div class="avatar"><img src="Vues/img/team/bastien.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="1.8s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Julie</h5>
                        <p class="subtitle">Assault and medic</p>
                        <div class="avatar"><img src="Vues/img/team/julie.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
            <div class="col-xs-6 col-sm-3 col-md-3">
				<div class="wow bounceInUp" data-wow-delay="2s">
                <div class="team boxed-grey">
                    <div class="inner">
						<h5>Roberto</h5>
                        <p class="subtitle">Assault</p>
                        <div class="avatar"><img src="Vues/img/team/roberto.jpg" alt="" class="img-responsive img-circle" /></div>

                    </div>
                </div>
				</div>
            </div>
        </div>		
		</div>
	</section>
	<!-- /Section: about -->
	

	<!-- Section: services -->
    <section id="video" class="home-section text-center bg-gray">
		
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>VIDEOS</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
		<div class="row wow bounceInUp" data-wow-delay="0.2s">
			<div class="fb-video" data-href="https://www.facebook.com/smilepaintball/videos/vb.1552858474930301/1623823687833779/?type=2&amp;theater" data-width="500"><div class="fb-xfbml-parse-ignore"><blockquote cite="/smilepaintball/videos/1623823687833779/"><a href="/smilepaintball/videos/1623823687833779/">SMILE Paintball Network : France VS Belgique 2015 : 150VS150</a><p>Follow our page SMILE Paintball Network and our Youtube channel to see more action videos. Suivez notre page pour voir plus de vidéos d&#039;action. https://youtu.be/3GFKRLPlqC0?list=PLvVNq9eaEuXtFhIRp2ZQHtfQC-gsBdgTh

			SMILE Paintball Network remercie Iron Balls Couvin Page Iron Balls Couvin pour nous avoir reçus à l&#039;occasion de ce FRANCE VS BELGIQUE 2015.
			Nos sponsors :
			Red Bull pour l&#039;énergie, Stock Americain Sprl Van Ryckel pour les uniformes et équipement tactique, patch-werk pour les patchs de teams les plus cool, KG-Factory pour les adapteurs MagFed universels, rails TIPX et nombres d&#039;accessoires innovateurs paintball imprimés en 3D.
			Ainsi que toutes les Teams, joueurs, Staff et la SMILE Vidéo Team, qui ont contribué à ce France VS Belgique mémorable !</p>Posted by <a href="https://www.facebook.com/smilepaintball">SMILE Paintball Network</a> on samedi 6 juin 2015</blockquote></div></div>
		</div>
		<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
       <div class="row wow bounceInUp" data-wow-delay="0.4s">
			<div class="fb-video" data-href="https://www.facebook.com/smilepaintball/videos/vl.674752066004423/1609629515919863/?type=1&amp;theater" data-width="500"><div class="fb-xfbml-parse-ignore"><blockquote cite="/smilepaintball/videos/1609629515919863/"><a href="/smilepaintball/videos/1609629515919863/">SMILE Paintball Network - Paintball Dragon Tournament</a><p>SMILE Paintball Network remercie Paintball Dragon  et Black Dragons Paintball Team pour l&#039;organisation.

			Our official Sponsors / Les sponsors officiels de SMILE Paintball Network :
			Red Bull pour l&#039;énergie
			Stock Americain Sprl Van Ryckel pour les uniformes et équipement tactique 
			patch-werk pour les patchs de teams les plus cool
			KG-Factory pour les adapteurs MagFed universels et nombres d&#039;accessoires innovateurs paintball imprimés en 3D.

			N&#039;hésitez pas à liker et partager notre page pour plus d&#039;action en vidéo https://www.facebook.com/smilepaintball

			https://www.youtube.com/channel/UC8XVTKNss5yDKaap67BcUcg</p>Posted by <a href="https://www.facebook.com/smilepaintball">SMILE Paintball Network</a> on mardi 21 avril 2015</blockquote></div></div>	


		</div>
		<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		<div class="row wow bounceInUp" data-wow-delay="0.2s">
			<div class="fb-video" data-href="https://www.facebook.com/smilepaintball/videos/vl.674752066004423/1599712093578272/?type=1&amp;theater" data-width="500"><div class="fb-xfbml-parse-ignore"><blockquote cite="/smilepaintball/videos/1599712093578272/"><a href="/smilepaintball/videos/1599712093578272/">SMILE Paintball Network : Fort-Paint Castle Game</a><p>SMILE Paintball Network &#064; FORT-PAINT crazy Castle Game
				We would like to thank our official sponsors // Nous remercions nos sponsors officiels
				Stock Americain Sprl Van Ryckel for the uniforms and tactical gear.
				patch-werk for the coolest team patches
				Red Bull for the energy

				Like and share our page https://www.facebook.com/smilepaintball

				More Videos on our youtube channel !
				https://www.youtube.com/channel/UC8XVTKNss5yDKaap67BcUcg</p>Posted by <a href="https://www.facebook.com/smilepaintball">SMILE Paintball Network</a> on lundi 23 mars 2015</blockquote></div></div>
		</div>
		<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		<div class="row wow bounceInUp" data-wow-delay="0.2s">
			<div class="fb-video" data-href="https://www.facebook.com/smilepaintball/videos/vl.674752066004423/1615258632023618/?type=1&amp;theater" data-width="500"><div class="fb-xfbml-parse-ignore"><blockquote cite="/smilepaintball/videos/1615258632023618/"><a href="/smilepaintball/videos/1615258632023618/">SMILE Paintball Network - Big Fight Loader Vintage Style &#064; A...</a><p>SMILE Paintball Network remercie Acting Paintball pour nous avoir reçus.
			Big Fight Loader Vintage Style.

			Our Sponsors / Nos sponsors :
			Red Bull pour l&#039;énergie
			Stock Americain Sprl Van Ryckel pour les uniformes et équipement tactique 
			patch-werk pour les patchs de team les plus cool
			KG-Factory pour les adapteurs MagFed universels et nombres d&#039;accessoires innovateurs paintball imprimés en 3D.

			N&#039;hésitez pas à suivre et partager notre page pour plus d&#039;action en vidéo
			Follow and share our page to see more action videos https://www.facebook.com/smilepaintball

			https://www.youtube.com/channel/UC8XVTKNss5yDKaap67BcUcg</p>Posted by <a href="https://www.facebook.com/smilepaintball">SMILE Paintball Network</a> on mardi 12 mai 2015</blockquote></div></div>
		</div>
		<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
        	<div class="row">
        		<h1>&nbsp;</h1>
        	</div>
        	<div class="row">
        		<a href="https://www.youtube.com/channel/UC8XVTKNss5yDKaap67BcUcg">
        			<button class="btn btn-skin ">More on Youtube</button>
        		</a>
        		<a href="https://www.facebook.com/smilepaintball?fref=ts">
        			<button class="btn btn-skin ">More on Facebook</button>
        		</a>
        	</div>
        	<div class="row">
        		<h1>&nbsp;</h1>
        	</div>
        	<div class="row">
        		<div class="fb-like" data-href="https://www.facebook.com/smilepaintball?fref=ts" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
        	</div>
        	<div class="row">
        		<h1>&nbsp;</h1>
        	</div>
        	<div>
				<div class="g-ytsubscribe" data-channel="mrfiesta007" data-layout="full" data-count="default"></div>

        	</div>
			
        </div>		
		</div>
	</section>
	<!-- /Section: services -->
	<!-- Section: intro -->
    <section id="sponsors" class="home-section text-center bg-gray">
	
		<div class="heading-about">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.2s">
					<div class="section-heading">
					<h2>Sponsors</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">
		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
		<div class="row">
			<button class="btn btn-skin " data-toggle="modal" data-target="#modalSponsors">Sponsor us</button>
		</div>
		<div class="row">
    		<h1>&nbsp;</h1>
    	</div>
		<div class="row wow bounceInUp" data-wow-delay="0.2s">
			<a href="http://www.redbull.com/be/fr">
				<img src="Vues/img/sponsors/redbull-com-logo.png" width="500em">
			</a>
			
		</div>
		<div class="row">
    		<h1>&nbsp;</h1>
    	</div>
		<div class="row wow bounceInUp" data-wow-delay="0.4s">
			<a href="http://www.kg-factory.fr/fr/">
				<img src="Vues/img/sponsors/kg-factory.jpg" width="500em">
			</a>
			
		</div>
		<div class="row">
    		<h1>&nbsp;</h1>
    	</div>
		<div class="row wow bounceInUp" data-wow-delay="0.6s">
			<a href="http://www.patch-werk.com/index.php/en/">
				<img src="Vues/img/sponsors/patch-werk.png" width="500em">
			</a>
			
		</div>
		<div class="row">
    		<h1>&nbsp;</h1>
    	</div>
		<div class="row">
			<button class="btn btn-skin " data-toggle="modal" data-target="#modalSponsors">Sponsor us</button>
		</div>
    </section>
    <!-- Modal -->
	<div id="modalSponsors" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <form method="POST" action="index.php?page=messageSponsorsRegister">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal">&times;</button>
		        <h4 class="modal-title">Sponsor us</h4>
		      </div>
		      
			      <div class="modal-body">
			        	<div class="input-group">
						  <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
						  <input type="text" class="form-control" id="name" name="name" placeholder="name" required>
						</div>
						<br/>
						<div class="input-group">
							<span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
						  <input type="email" class="form-control" id="mail" name="mail" placeholder="my_e-mail@gmail.com" required>
						</div>
						<br/>
						<div class="input-group">
							
							<span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
						  <textarea class="form-control" rows="5" id="message" name="message" placeholder="Your message" required></textarea>
						</div>
						<br/>
						
			      </div>
		  	  
		      <div class="modal-footer">
		        <input type="submit" value="Send" class="btn btn-skin">
		      </div>
		    </div>
	    </form>
	  </div>
	</div>
	

	<!-- Section: contact -->
    <section id="contact" class="home-section text-center">
		<div class="heading-contact">
			<div class="container">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="wow bounceInDown" data-wow-delay="0.4s">
					<div class="section-heading">
					<h2>Get in touch</h2>
					<i class="fa fa-2x fa-angle-down"></i>

					</div>
					</div>
				</div>
			</div>
			</div>
		</div>
		<div class="container">

		<div class="row">
			<div class="col-lg-2 col-lg-offset-5">
				<hr class="marginbot-50">
			</div>
		</div>
    <div class="row text-center">
       <!--  <div class="col-lg-8">
            <div class="boxed-grey">
                <form id="contact-form">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name" required="required" />
                        </div>
                        <div class="form-group">
                            <label for="email">
                                Email Address</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                        </div>
                        <div class="form-group">
                            <label for="subject">
                                Subject</label>
                            <select id="subject" name="subject" class="form-control" required="required">
                                <option value="na" selected="">Choose One:</option>
                                <option value="service">General Customer Service</option>
                                <option value="suggestions">Suggestions</option>
                                <option value="product">Product Support</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="name">
                                Message</label>
                            <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                placeholder="Message"></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-skin pull-right" id="btnContactUs">
                            Send Message</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
		
		<div class="col-lg-4"> -->
		<div class="text-center">
			<!-- <div class="widget-contact"> -->
				<h5>Main Office</h5>
				
				<address>
				  <strong>SMILE paintball network</strong><br>
				 Bruxelles <br/>
				 Belgium <br/>
				 EU<br/>
				  
				</address>

				<address>
				  <strong>Email</strong><br>
				  <a href="mailto:team@smilepaintball.com">team@smilepaintball.com</a>
				</address>	
				<address>
				  <strong>We're on social networks</strong><br>
                       	<ul class="company-social">
                            <li class="social-facebook"><a href="https://www.facebook.com/smilepaintball?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li class="social-twitter"><a href="https://twitter.com/SmilePaintball" target="_blank"><i class="fa fa-twitter"></i></a></li>
                           
                        </ul>	
				</address>					
			
			<!-- </div>	 -->
		</div>
    </div>	

		</div>
	</section>
	<!-- /Section: contact -->

	<footer>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-12">
					<div class="wow shake" data-wow-delay="0.4s">
					<div class="page-scroll marginbot-30">
						<a href="#intro" id="totop" class="btn btn-circle">
							<i class="fa fa-angle-double-up animated"></i>
						</a>
					</div>
					</div>
					<p>Smile team - Video team.</p>
				</div>
			</div>	
		</div>
	</footer>

    <!-- Core JavaScript Files -->
    <script src="Vues/js/jquery.min.js"></script>
    <script src="Vues/js/bootstrap.min.js"></script>
    <script src="Vues/js/jquery.easing.min.js"></script>	
	<script src="Vues/js/jquery.scrollTo.js"></script>
	<script src="Vues/js/wow.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="Vues/js/custom.js"></script>

    <script src="https://apis.google.com/js/platform.js"></script>

</body>

</html>
