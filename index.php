<?php

if($_POST["submit"]) {
    $recipient="aye2thet90@gmail.com";
    $subject="Form to email message";
    $sender=$_POST["senderName"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>
<html>
<head>
	<meta charset="UTF-8">
	<title>Aye Aye Thet Portfolio</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<!-- <meta name="viewport" content="width=device-width, target-densitydpi=device-dpi" /> -->
	<meta name="keywords" content="Aye Aye Thet , web designer , frontend developer, Porfolio" />
    	<meta name="author" content="Porfolio by Aye Aye Thet" />
	<meta name="description" content="Aye Aye Thet , web designer , frontend developer">
	<meta property="og:title" content="">
	<meta property="og:type" content="website">
	<meta property="og:url" content="" >
	<meta property="og:image" content="">
	<meta property="og:description" content="Aye Aye Thet , web designer , frontend developer">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/animate.min.css">
	<link rel="stylesheet" href="css/hover.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href=""><img src="img/T.png" alt="" width="50"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
        	<li class="nav-item active">
                  <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
                </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#about">About Me</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#services">Services</a>
          </li>
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
	<section id="home">
		<div class="home main">
			<div class="container">
				<div class="row h-100 align-items-center justify-content-center text-center">
					<div class="col-lg-10 align-self-end">
						<div class="img-wrap">
							<img src="img/profile.jpg" alt="">
						</div>
						<div class="info">
							<h4 class="intro">Hello!  my name is  Aye Thet</h4>
							<h3 class="intro-1 cd-headline repos slide">
								<span>I 'm</span> 
								<span class="cd-words-wrapper repos" id="role">
									<b class="is-visible">web UI & Graphic designer</b>
									<b>Front end Developer</b>	
								</span>
							</h3>
						</div>
					</div>
					<div class="col-lg-8  align-self-baseline">
						<div class="profile__mouse"></div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="page-section bg-white" id="about">
	    <div class="container animatedParent">
	      <div class="row justify-content-center">
	        <div class="col-lg-8 text-center">
	          <div class="double-header">
	          	 <h2 class="text-violet mt-0">About</h2>
	          	 <span>About Me</span>
	          </div>
	        </div>
	      </div>
	      <div class="row justify-content-center align-items-center mt50 animated fadeInDownShort go" data-id="1">
	      	<div class="col-lg-6">
	      		<img src="img/about-me.png" alt="devices">
	      	</div>
	      	<div class="col-lg-6">
	      		<div class="about--me">
	      			<div class="mini--header">
	      			<h3>I'm a web UI / Graphic designer and frontend developer based in Yangon, Myanmar. </h3>
	      			</div>
		      		<p class="text-violet">
		      			I’m working as a remote frontend developer of unicom interactive company based in singapore. I also enjoy creating beautiful and intuitive designs.
						When I m not coding, you can find me playing with my lovely daughter and going to relax zone with my family.
		      		</p>
	      		</div>
	      	</div>
	      </div>
	      <div class="row justify-content-center align-items-center mt50 animated fadeInDownShort go" data-id="2">
	      		<div class="col-lg-10">
	      			<div class="image--slider-wrapper">
	      				<div class="image--slider">
						  <div class="white-border-img"><img src="img/img1.jpg" alt=""></div>
						  <div class="white-border-img"><img src="img/img2.jpg" alt=""></div>
						  <div class="white-border-img"><img src="img/img3.jpg" alt=""></div>
						  <div class="white-border-img"><img src="img/img4.jpg" alt=""></div>
						</div>
	      			</div>
	      		</div>
	      </div>
	    </div>
  </section>
  <section class="page-section bg-dark-blue" id="services">
		<div class="container">
			<div class="row justify-content-center">
		        <div class="col-lg-8 text-center">
		          <div class="double-header">
		          	 <h2 class="text-white mt-0">Services</h2>
		          	 <span>Services</span>
		          </div>
		        </div>
	     	</div>
			<div class="row align-items-center justify-content-center text-center mt50">
				<div class="col-lg-4">
					<div class="services--wrapper text-center">
						<div class="web-design">
							<img src="img/web-design.png" alt="">
							<h4>Web Design</h4>
							<p class="text-white">
								I am passionate about making beautiful and functional websites for you. My aim is on working with you to develop a website strategy so that your website not only looks great, but works great too.
							</p>
							<a href="mailto:aye2thet90@gmail.com" class="text-white">Contact</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="services--wrapper text-center">
						<div class="grahic-design">
							<img src="img/analysis.png" alt="">
							<h4>Graphic Design</h4>
							<p class="text-white">
								I offer to create custom graphic designs and concepts to describe your business in both print and digital media also give the best relationship between a business or organization and its audience. 
							</p>
							<a href="mailto:aye2thet90@gmail.com" class="text-white">Contact</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="services--wrapper text-center">
						<div class="frontend-dev">
							<img src="img/web-programming.png" alt="">
							<h4>Frontend Web Development</h4>
							<p class="text-white">
								Build attractive websites with clean and easy to maintain for future that deliver an exceptional customer experience and relates to your customers.
							</p>
							<a href="mailto:aye2thet90@gmail.com" class="text-white">Contact</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row align-items-center justify-content-center text-center mt50">
				<div class="col-lg-4">
					<div class="services--wrapper text-center">
						<div class="web-design">
							<img src="img/online-advertising.png" alt="" width="78">
							<h4>Web Banners</h4>
							<p class="text-white">
								Make the effective animated web banner ads to be matched your branding and the landing page for potential customers.
							</p>
							<a href="mailto:aye2thet90@gmail.com" class="text-white">Contact</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="services--wrapper text-center">
						<div class="grahic-design">
							<img src="img/joomla.png" alt="" width="78">
							<h4>Web CMS</h4>
							<p class="text-white">
								Make your website with Joomla and wordpress CMS solution and allows you to manage your web site easily.
							</p>
							<a href="mailto:aye2thet90@gmail.com" class="text-white">Contact</a>
						</div>
					</div>
				</div>
			</div>
		</div>
 </section>
	<section class="page-section" id="skills">
		<div class="skills repos">
			<div class="skill--bg"></div>
			<div class="overlay--bg"></div>
			<div class="skill--content">
				<div class="container">
					<div class="row justify-content-center">
				        <div class="col-lg-8 text-center">
				          <div class="double-header">
				          	 <h2 class="text-white mt-0">Skills</h2>
				          	 <span class="text-white">Skills</span>
				          </div>
				        </div>
		     		</div>tf
		     		<div class="row align-items-center justify-content-center text-center mt50">
						<div class="col-lg-6">
							<div class="web-skill">
								<h2>Web Development</h2>
								<div class="skill-bars">
									<div class="bars repos">
										<div class="skill-name">HTML</div>
									  	<div class="skill-percent">90%</div>
									  	<div class="progress">
										  <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									
									<div class="bars repos">
										<div class="skill-name">CSS</div>
									  	<div class="skill-percent">85%</div>
									  	<div class="progress">
										  <div class="progress-bar" role="progressbar" style="width: 85%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="bars repos">
										<div class="skill-name">Javascript</div>
									  	<div class="skill-percent">60%</div>
									  	<div class="progress">
										  <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="bars repos">
										<div class="skill-name">Wordpress CMS</div>
									  	<div class="skill-percent">70%</div>
									  	<div class="progress">
										  <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="bars repos">
										<div class="skill-name">Version Control System</div>
									  	<div class="skill-percent">65%</div>
									  	<div class="progress">
										  <div class="progress-bar" role="progressbar" style="width:65%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<div class="design-skill">
								<h2>Design & Multimedia</h2>
								<div class="skill-bars">
									<div class="bars repos">
										<div class="skill-name">Adobe Photoshop</div>
									  	<div class="skill-percent">80%</div>
									  	<div class="progress">
										  <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									
									<div class="bars repos">
										<div class="skill-name">Adobe Illustrator</div>
									  	<div class="skill-percent">65%</div>
									  	<div class="progress">
										  <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="bars repos">
										<div class="skill-name">Adobe Indesign</div>
									  	<div class="skill-percent">75%</div>
									  	<div class="progress">
										  <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="bars repos">
										<div class="skill-name">Adobe Edge</div>
									  	<div class="skill-percent">70%</div>
									  	<div class="progress">
										  <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
									<div class="bars repos">
										<div class="skill-name">GWD</div>
									  	<div class="skill-percent">70%</div>
									  	<div class="progress">
										  <div class="progress-bar" role="progressbar" style="width:70%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="page-section" id="portfolio">
		<div class="container">
	      <div class="row justify-content-center">
	        <div class="col-lg-8 text-center">
	          <div class="double-header">
	          	 <h2 class="text-violet mt-0">Portfolio</h2>
	          	 <span>Portfolio</span>
	          </div>
	        </div>
	      </div>
	      <div class="row justify-content-center align-items-center porfolio-content mt50">
	      	<div class="col-lg-3">
	      		<a href="javascript:void(0);">
	      			<div class="project-holder">
		      			<img src="img/cfb.png" alt="" width="150">
		      		</div>
		      		<div class="proj-descp">
		      			<h4>Ecommerce Web App</h4>
		      		</div>
	      		</a>
	      	</div>
	      	<div class="col-lg-3">
	      		<a href="javascript:void(0);">
	      			<div class="project-holder">
		      			<img src="img/card-mb.png" alt="" width="120">
		      		</div>
		      		<div class="proj-descp">
		      			<h4>Microsite</h4>
		      		</div>
	      		</a>
	      	</div>
	      	<div class="col-lg-3">
	      		<a href="javascript:void(0);">
	      			<div class="project-holder">
		      			<img src="img/dcd.png" alt="" width="180">
		      		</div>
		      		<div class="proj-descp">
		      			<h4>Wordpress Website</h4>
		      		</div>
	      		</a>
	      	</div>
	      	<div class="col-lg-3">
	      		<a href="javascript:void(0);">
	      			<div class="project-holder">
		      			<img src="img/logo.png" alt="" width="120">
		      		</div>
		      		<div class="proj-descp">
		      			<h4>Logo Design</h4>
		      		</div>
	      		</a>
	      	</div>
	      </div>
	      <div class="row justify-content-center align-items-center porfolio-content mt50">
	      	<div class="col-lg-3">
	      		<a href="javascript:void(0);">
	      		
	      		<!-- <a href="https://apacjuniper.net/v3/bootcampquiz/distributor-apac" target="_blank"> -->
	      			<div class="project-holder">
		      			<img src="img/p5.png" alt="" width="120">
		      		</div>
		      		<div class="proj-descp">
		      			<h4>Mobile First Quiz App</h4>
		      		</div>
	      		</a>
	      	</div>
	      	<div class="col-lg-3">
	      		<a href="javascript:void(0);">
	      		<!-- <a href="http://wos2018.unicomi.com/" target="_blank"> -->
	      			<div class="project-holder">
		      			<img src="img/p6.png" alt="" width="100">
		      		</div>
		      		<div class="proj-descp">
		      			<h4>Quiz App</h4>
		      		</div>
	      		</a>
	      	</div>
	      	<div class="col-lg-3">
	      		<a href="javascript:void(0);">
	      		<!-- <a href="http://dev.mymicroproperties.com/" target="_blank"> -->
	      			<div class="project-holder">
		      			<img src="img/micrologo.svg" alt="" width="180">
		      		</div>
		      		<div class="proj-descp">
		      			<h4>Real Estate Enterprise App</h4>
		      		</div>
	      		</a>
	      	</div>
	      	<div class="col-lg-3">
	      		<a href="javascript:void(0);">
	      		<!-- <a href="http://clients.in-uat.com/demo/dbs-digital-banners/300x250/" target="_blank"> -->
	      			<div class="project-holder">
		      			<img src="img/p8.png" alt="" width="120">
		      		</div>
		      		<div class="proj-descp">
		      			<h4>Banner Ads</h4>
		      		</div>
	      		</a>
	      	</div>
	      </div>
	      <div class="load-more text-center mt50">
	      	<button>Load More</button>
	      </div>
	    </div>
	</section>
	<section class="page-section" id="contact">
		<div class="contact repos">
			<div class="contact--bg"></div>
			<div class="overlay--bg"></div>
			<div class="contact--content">
				<div class="container">
					<div class="row justify-content-center">
				        <div class="col-lg-7 text-center">
				          <div class="double-header">
				          	 <h2 class="text-white mt-0">Contact</h2>
				          	 <span class="text-white">Contact Me</span>
				          </div>
				          <?=$thankYou ?>
				          <form method="post" action="./">
							  <div class="form-wrapper">
							    <div class="formfield">
							      <label for="senderName">Name</label>
							      <input type="text" class="form-control" id="senderName" name="senderName" placeholder="Name" value="" required>
							    </div>
							    <div class="formfield">
							      <label for="senderEmail">Email</label>
							      <input type="email" class="form-control" name="senderEmail" id="senderEmail" placeholder="Email" value="" required>
							    </div>
							     <div class="formfield">
							      <label for="number">Contact No</label>
							      <input type="number" class="form-control" id="number" placeholder="phone no" value="" required>
							    </div>
							    <div class="formfield">
								    <label for="message">Message</label>
								    <textarea class="form-control" id="message" for="message" rows="4"></textarea>
								  </div>
								 <button class="btn btn-primary" type="submit">Submit</button>
							  </div>
							  
							</form>
				          <!-- <div class="form-wrapper">
				          	<form role="form" class="needs-validation" novalidate>
				          		<div class="formfield form-group">
					          		<label for="name">Name <sup>*</sup></label>
					          		<input type="text" name="name" id="name">
					          	</div>
					          	<div class="formfield form-group">
					          		<label for="Email">Email <sup>*</sup></label>
					          		<input type="email" name="email" id="email">
					          	</div>
					          	<div class="formfield form-group">
					          		<label for="contact">Contact No <sup>*</sup></label>
					          		<input type="number" name="contact" id="contact-no">
					          	</div>
					          	<div class="formfield form-group">
					          		<label for="msg">Message  <sup>*</sup></label>
					          		<textarea name="msg" id="msg" cols="30" rows="7"></textarea>
					          	</div>
					          	<div class="formfield form-group">
					          		<button class="btn btn-primary" type="submit">Submit form</button>
					          		
					          	</div>
				          	</form>
				          </div> -->
				        </div>
		     		</div>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="col-lg-4 text-center">
					<div class="ellipse linkin hvr-grow">
						<a href="https://www.linkedin.com/in/aye-thet-34a30270/" target="_blank"><img src="img/linkedin-letters.png" alt=""></a>
					</div>
					<div class="ellipse gplus hvr-grow">
						<img src="img/google-plus.png" alt="">
					</div>
					<div class="ellipse skype hvr-grow">
						<img src="img/skype.png" alt="">
					</div>
					<div class="ellipse fb no-margin hvr-grow">
						<a href="https://www.facebook.com/alin.yhoung" target="_blank"><img src="img/facebook-letter-logo.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/jquery.backstretch.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/scripts.js"></script>
	<script src="js/headline.js"></script>
	<script src="js/jquery.easing.min.js"></script>
  	<script src="js/jquery.magnific-popup.min.js"></script>
  	<script>
	// Example starter JavaScript for disabling form submissions if there are invalid fields
	(function() {
	  'use strict';
	  window.addEventListener('load', function() {
	    // Fetch all the forms we want to apply custom Bootstrap validation styles to
	    var forms = document.getElementsByClassName('needs-validation');
	    // Loop over them and prevent submission
	    var validation = Array.prototype.filter.call(forms, function(form) {
	      form.addEventListener('submit', function(event) {
	        if (form.checkValidity() === false) {
	          event.preventDefault();
	          event.stopPropagation();
	        }
	        form.classList.add('was-validated');
	      }, false);
	    });
	  }, false);
	})();
	</script>
</body>
</html>
