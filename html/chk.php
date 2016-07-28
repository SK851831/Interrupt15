<?php
  session_start();

  // If the session vars aren't set, try to set them with a cookie
  if (!isset($_SESSION['email'])) {
    if (isset($_COOKIE['email']) && isset($_COOKIE['id'])&& isset($_COOKIE['name'])) {
      $_SESSION['email'] = $_COOKIE['email'];
      $_SESSION['id'] = $_COOKIE['id'];
      $_SESSION['name'] = $_COOKIE['name'];
    }
  }
?>
<!doctype html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" >
<meta name="viewport" content="width=device-width, maximum-scale=1">
<title>Interrupt '15</title>
<meta name="description" content="SVCE Interrupt'15" />	    
<meta name="keywords" content="website ,interrupt ,interrupt15 ,svce ,cse ,engineering ,symposium ,">
<meta property="og:title" content="Interrupt '15 is a National level technical symposium conducted every year by ACE (Association of Computer Engineers) of SVCE.">
<meta http-equiv="cache-control" content="max-age=0" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="expires" content="0" />
<meta http-equiv="expires" content="Tue, 01 Jan 1980 1:00:00 GMT" />
<meta http-equiv="pragma" content="no-cache" />
<link rel="icon" href="favicon.png" type="image/png">
<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css?<?php echo time(); ?>" rel="stylesheet" type="text/css">
<link href="css/linecons.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">
<link href="css/button.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/slicebox.css" />
<link rel="stylesheet" type="text/css" href="css/custom.css" />
<link href='http://fonts.googleapis.com/css?family=Lato:400,900,700,700italic,400italic,300italic,300,100italic,100,900italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Lato:400,500,700,800,600,300,200' rel='stylesheet' type='text/css'>

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->
<script type="text/javascript">
        document.oncontextmenu = document.body.oncontextmenu = function() {return false;}
    </script>
<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/classie.js"></script>
<script type="text/javascript" src="js/jquery.typetype.min.js"></script>
<script type="text/javascript" src="js/jquery.slicebox.js"></script>
<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->
<style>
word{ display:inline-block; }

a letter{ color:inherit; } /* for links */
/* This is the NORMAL state of a character */
letter{
display:inline-block;
white-space:pre;
background:none;
transition:.4s;
}
/* Below is the INITIAL state of a character */
letter.initial{
opacity:0;
text-shadow:0 0 9px;
color:#FFF;
-webkit-transform:scale(8);
-webkit-transform-origin:150% 50%;
transform:scale(8);
transform-origin:150% 50%;
}
</style>

<script type="text/javascript">
	$(document).ready(function(e) {
        $('.res-nav_click').click(function(){
		$('ul.toggle').slideToggle(600)
			});
			$(document).ready(function(){
    		$("#keek").hover(function(){
					$(this).delay("slow").html("Get INTERRUPT-ed!!!");
				}, function(){
        	$(this).delay("slow").html("INTERRUPT '15");
				});

			});
	$(document).ready(function() {
$(window).bind('scroll', function() {
         if ($(window).scrollTop() > 0) {
             $('#header_outer').addClass('fixed');
         }
         else {
             $('#header_outer').removeClass('fixed');
         }
    });

	  });


		    });
function resizeText() {
	var preferredWidth = 767;
	var displayWidth = window.innerWidth;
	var percentage = displayWidth / preferredWidth;
	var fontsizetitle = 25;
	var newFontSizeTitle = Math.floor(fontsizetitle * percentage);
	$(".divclass").css("font-size", newFontSizeTitle)
}
</script>
<script src="https://connect.facebook.net/en_US/all.js"></script>


</head>
<body>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=1548249328724301";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
<!--Header_section-->
<header id="header_outer">
  <div class="container">
    <div class="header_section text-center">
			<nav class="nav " id="nav">
        <ul class="toggle">
					<li><a href="#top_content">Home</a></li>
          <li><a href="#desc">Description</a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>
          <?php
          if (!isset($_SESSION['email'])) {
          ?>
					<li id="regBtn"><a href="" data-toggle="modal" data-target="#reg" class="btn btn-primary"     style="background-color:#ffffff;">Register</a></li>
					<li id="logBtn"> <a href="" data-toggle="modal" data-target="#log"class="btn btn-success" style=" background-color: #ffffff;">Login</a></li>
          <?php }else{ ?>
					<li id="un"><h3 id="userName">Hi, <?php echo $_SESSION['name']; ?></h3></li>
          					<li id="lg"><a href="logout.php"  id="logoutBtn" class="btn btn-success" style=" background-color: #ffffff;">Logout</a></li>
        <?php } ?>
        </ul>

        <ul class="">
          <li><a href="#top_content">Home</a></li>
          <li><a href="#desc">Description</a></li>
          <li><a href="#events">Events</a></li>
          <li><a href="#team">Team</a></li>
          <li><a href="#contact">Contact</a></li>
          <?php

          if (!isset($_SESSION['email'])) {
          ?>
					<li id="regBtn"><a href="" data-toggle="modal" data-target="#reg" class="btn btn-primary"     style="background-color:#ffffff;">Register</a></li>
					<li id="logBtn"> <a href="" data-toggle="modal" data-target="#log"class="btn btn-success" style=" background-color: #ffffff;">Login</a></li>
          <?php }else{ ?>
					<li id="un"><h3 id="userName">Hi ,<?php echo $_SESSION['name']; ?></h3></li>
          					<li id="lg"><a href="logout.php"  id="logoutBtn" class="btn btn-success" style=" background-color: #ffffff;">Logout</a></li>
        <?php } ?>
        </ul>

      </nav>

      <a class="res-nav_click animated wobble wow " href="javascript:void(0)"><i class="fa-bars"></i></a>
		</div>
  </div>
</header>
<div id="reg" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h2 class="modal-title">Registeration</h2>
			</div>
			<div class="modal-body">
				<div class="modal-body">
					<iframe width="100%" height="750px"
										scrolling="no" src="register.php">
								</iframe>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>
<div id="subscribe" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h2 class="modal-title">Subscription</h2>
			</div>
			<div class="modal-body">
				<div class="modal-body">
					<iframe width="100%" height="550px"
										scrolling="no" src="list.php">
								</iframe>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>

<div id="log" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h2 class="modal-title">Login</h2>
			</div>
			<div class="modal-body">
				<iframe id="reframe" width="100%" height="400px"
										scrolling="no" src="login.php">
				</iframe>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>

	</div>
</div>
<!--Header_section-->

<!--Top_content-->
<section id="top_content" class="top_cont_outer">
  <div class="top_cont_inner">
    <div class="container">
      <div class="top_content">
        <div class="row">
            <div class="text-center">
				<a href="coc.php"><button class="btn btn-success btn-md">Clash of Coders </button> </a> <a href="quizzler.php"><button class="btn btn-lg btn-primary"> Quizzler </button> </a>			<?php
          if (isset($_SESSION['email'])) {
          ?>

							<a href=""  data-toggle="modal" data-target="#subscribe" class="btn btn-info" style=" background-color: #ffffff;"><h3>Subscriptions</h3></a>
<?php } ?>	
			
			<div class="alert alert-warning" role="alert"><h3 style="font-size:40px;">Get to the next level &nbsp;Interrupt App&nbsp;&nbsp;<a href="https://play.google.com/store/apps/details?id=in.interrupt.android"><img src="img/gplay.png" height=50px width=130px alt="interruptAPP"/></a></h3></div>
			
							<div class="wow animated slideInDown" data-wow-delay="300ms">
							<img  src="img/int.png" class="center-block rotart" height="150px" width="150px">
						</div>
              <h2 class="keez wow delay-06s animated slideInUp" style="font-weight: 400; color:#FFF;" data-wow-delay="500ms">ASSOCIATION OF COMPUTER ENGINEERS <br>AND<br> DEPARTMENT OF COMPUTER SCIENCE AND ENGINEERING</h2>
              <p class="wow animated slideInUp" style="font-size: 50px;line-height: 100%;color:#000000;" data-wow-delay="700ms">Proudly  Presents</p>
						</div>
        		<div class="wow delay-04s animated slideInUp "data-wow-delay="1200ms">
							<a href="#desc"><h2 id="keek" class="text-center" style="text-transform: uppercase !important; font-size: 60px;  color:#FFF; font-weight: 400;">Interrupt '15</h2></a>
						</div>
						<div class="wow delay-08s animated slideInUp" data-wow-delay="1000ms">
							<h2 class="text-center" style="font-weight: 400;">A National Level Technical Symposium</h2>
						</div>
						<div class="wow delay-08s animated slideInUp" data-wow-delay="1200ms">
							<h1 class="text-center" style="font-weight: 400; color:#FFF;">Sept 3rd 2015</h1>
						</div>

        </div>
      </div>
    </div>
  </div>
</section>
<!--Top_content-->

<!--desc-->
<section  id="desc">
  <div class="container">
		  <div class="wow animated">
				<div class="wow delay-02s animated slideInDown"  data-wow-delay="1500ms">
					<img src="img/logo_coll.png" class="center-block rotart" style="margin-top:20px;" height="150px" width="150px">
			</div>
				<h1 class="text-center keez wow delay-02s animated tada" id="svce" style="text-transform: uppercase !important; font-size: 30px; color: #006666; ">Sri Venkateswara College of Engineering</h1>
			</div>
    <h2>Description</h2>
    <div class="desc_area">
      <div class="row" id="mainText" style="font-family:'Pacifico';">
        <p style=" font-size: 30px; color:#0066FF; font-weight: 300;line-height: 150%;">‘Boisterous’-One word that describes Interrupt’14 best. As always, the symposium had surpassed the expectations and set the bar really high making it even more challenging for the subsequent years to come. There were multiple online and offline events covering both the technical and non-technical side. The workshop on web development helped the students explore this wide arena. Numbers say a lot more than words. So, seeing how there were about 1500 students who participated from across the country, this event was a huge success.</p>
				<p style=" font-size: 30px; color:#0066FF; font-weight: 300;line-height: 150%;">Here we go INTERRUPTing a calm day again. Presenting the wildest and most viral sensation since cat videos and North West, Interrupt’15 is back-bigger and better than ever! Flying grenades, flipping ninjas and Chuck Norris all over town. Become the Sherlock Holmes through our hintforage, or be namma ooru “Dennis Ritchie” in coding. Idhu just trailer kannu,come see the real picture on the 3rd of September at SVCE.
</p>
				<!-- Trigger the modal with a button -->
<!-- <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button> -->

<!-- Modal -->

      </div>
    </div>
  </div>
</section>
<!--desc-->


<!--new_events-->

<!-- events -->
<section id="events" class="content">

  <!-- Container -->
  <div class="container events-title">

    <!-- Section Title -->
    <div class="section-title">
      <h2>events</h2>
    </div>
    <!--/Section Title -->

  </div>
  <!-- Container -->

  <div class="events-top"></div>

  <!-- events Plus Filters -->
   <div class="events">

<div class="container">

		<div class="wrapper">
			<?php
				$onsite_events=array("Data Surfer","MYB v3.0","Hint Forage","Papier Remise","Data Dossier","Code Ninja","Clash of Coders","Quizzler","Dumb Charades");
				$onsite_event_title=array("Data Structure","A vacation from vocation","DumbC+ Rapid fire+ puzzles","Paper presentation","Database: Tabl(e)oid","Trifecta","Online coding","Online event","say Dumb C");
				$cid=array("codo","myb","hf","pr","dd","cb","coc","nyg","dumbC");
			?>
						<ul id="sb-slider" class="sb-slider">
							<?php for($i=0;$i<9;$i++){
							?>
							<li>
								<img id="src" src="images/<?php echo $i+1;?>.jpg" alt="image<?php echo $i+1;?>" data-toggle="modal" data-target="#<?php echo $cid[$i]; ?>"/>
								<div class="sb-description">
									<h3><?php echo $onsite_events[$i]; ?></h3>
									<h4><?php echo $onsite_event_title[$i]; ?></h4>
								</div>
							</li>
							<?php } ?>
						</ul>

						<div id="shadow" class="shadow"></div>
<h3 class="text-center">Click "&lt;" and "&gt;" To view more events </h3>
						<div id="nav-arrows" class="nav-arrows">
							<a href="#">Next</a>
							<a href="#">Previous</a>
						</div>

					</div><!-- /wrapper -->
					<div id="codo" class="modal fade" role="dialog">
						<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h2 class="modal-title">Data Surfer</h2>
									<h3 class="text-center">Data Structure</h3>
								</div>
								<div class="modal-body text-center" style="font-size: 23px;line-height:30px;">
										<img src="images/1.jpg"><hr>
										<h2>Description:</h2>
										<p style="color: #0066FF;
">Do you think you can find hidden words? Do you think your letters are better organised than anybody else’s? Do you believe in logical reasoning  and forming words using letters from patterns?</p>
										<p style="color: #0066FF;
">If you are Wordsworth or even 10% his words’ worth,  this is the right event for you. Mind you, the only language you need to know is a little English and certain computer science terms( The latter only for extra points). So feel free and jump in to indulge, guess and talk gibberish in the best possible ways.</p>
										<hr>
										<h2>Rules and prerequisites:</h2>
										<!-- <li>Download our app &lt;link&gt;</li> -->
										<li>A Very Basic knowledge on basic data structures(arrays, stack, queues, list and trees) CODING NOT NECESSARY.</li>
										<li>2 members per team.</li>
										<hr>
										<h2>Rounds: (3)</h2>
										<li>Application based data structures( NOT QUIZ, on spot only but in app{we are in a green movement, you see :P}).</li>
										<li>Word Search (from data structures).</li>
										<li>”Sethan sivanandi” round (dare to find out).</li>

								</div>
								<div class="modal-footer" style="border-top: 0px solid #e5e5e5;padding: 0px 250px 20px;">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>

					<div id="myb" class="modal fade" role="dialog">
						<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h2 class="modal-title">A vacation from vocation</h2>
									<h3 class="text-center">MYB v3.0</h3>
								</div>
								<div class="modal-body text-center" style="font-size: 23px;line-height:30px;">
										<img src="images/2.jpg"><hr>
										<h2>Description:</h2>
										<p style="color: #0066FF;
">I am the person anybody turns to for suggestions(friends:Where  can we go? U: where we always do... friends: wonderful da!!).</p>
										<p style="color: #0066FF;
">
 I can tackle my way out of any situation logically(If you had a pizza with crust thickness 'A' and radius 'Z', what's the volume of the pizza?(Answer  ::  PI*Z*Z*A>>:)  .</p>
 										<p style="color: #0066FF;
 ">
I do a lot of non- technical scenario-based thinking almost always seemingly paradoxical.(eg. Did the teacher kick me out because I was talking when he was talking or because I did not talk when he wanted me to.).</p>
										<p style="color: #0066FF;
">
Do you know the art of “SAMALIFICATION?”( for those of you who don’t know what it means,  don’t fret, it is something you do during viva to the external!)
If you do at least one of the above, why are </p>
										<p style="color: #0066FF;
">you wasting time reading?
Register now.
</p>
										<hr>
										<h2>Rules and prerequisites:</h2>
										<!-- <li>Download our app &lt;link&gt;</li> -->
										<li>Neenga vanda mattum podum!!!</li>
										<li>2 members max. Individual contents are also welcome.</li>
										<hr>
										<h2>Rounds: (3)</h2>
										<li>Personality-based sentimental analysis
(In app and on spot only, pen and paper also)
(Q::Do you forgive an offender or will you take revenge? A::Never mind, both are right). (option c: pat-slap (whack!!):P)
</li>
										<li>Guess the product!!(just make the CONNEXION).</li>
										<li>What’s business without some gamble? Gear up to be nimble; Don’t tremble, for you have full rights to ramble!! </li>

								</div>
								<div class="modal-footer" style="border-top: 0px solid #e5e5e5;padding: 0px 250px 20px;">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>

					<div id="hf" class="modal fade" role="dialog">
						<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h2 class="modal-title">Hint Forage</h2>
									<h3 class="text-center">DumbC+ rapid fire+ puzzles</h3>
								</div>
								<div class="modal-body text-center" style="font-size: 23px;line-height:30px;">
										<img src="images/3.jpg"><hr>
										<h2>Description:</h2>
										<p style="color: #0066FF;
					">Puzzles and hints!!  Sate your hunger for quests and teasers. Get lost in the interaction of fuzziness and logic. Do you think you can handle the tempest?
Emerge victorious!!
</p>
										<hr>
										<h2>Rules and prerequisites:</h2>
										<!-- <li>Download our app &lt;link&gt;</li> -->
										<li>Round 1in app as well as pen and paper.</li>
										<li>2 or 3 members per team. </li>
										<hr>
										<h2>Rounds: (3)</h2>
										<li>Puzzles, riddles and a lot of other stuff. ( other stuff::The things done when boredom threatens your life).</li>
										<li>Fire at will.</li>
										<li>Can’t talk in public? Then get ready to ACT on cue to identify a clue!!!.</li>

								</div>
								<div class="modal-footer" style="border-top: 0px solid #e5e5e5;padding: 0px 250px 20px;">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>

					<div id="pr" class="modal fade" role="dialog">
						<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h2 class="modal-title">Papier Remise</h2>
									<h3 class="text-center">Paper presentation</h3>
								</div>
								<div class="modal-body text-center" style="font-size: 23px;line-height:30px;">
										<img src="images/4.jpg"><hr>
										<h2>Description:</h2>
										<h3>"Imagination is more important than knowledge"</h3>
										<p style="color: #0066FF;
					">Are you happier knowing the working of Napier bones? Do you have a knack at discovery like Indiana Jones? Then bring it out coherently in the form of a structured writing aka “paper”. There are a select few topics in which your thoughts outflow and research is gladly welcome.</p>
										<h3>For good ideas and true innovation, you need human interaction, conflict, argument, debate </h3>
										<p style="color: #0066FF;
					">So get ready to learn, teach and help the world. </p>
										<h2>Topics:</h2>
										<li>Data Mining</li>
										<li>Image Processing</li>
										<li>Artificial Intelligence</li>
										<li>Networks</li>
										<li>Datalake</li>
										<li>Multimedia</li>
										<li>Distributed Computing</li>
										<li>Embedded Systems.</li>
										<hr>
										<h2>Rules and prerequisites:</h2>
										<li>The paper should be in IEEE format.</li>
										<li>Abstract should not exceed more than 500 words.</li>
										<li>Plagiarism is strictly prohibited.</li>
										<li>Each paper can have a maximum of 3 authors. </li>
										<li>All authors need not pertain to the same institution.</li>
										<li>The paper should be submitted in word document (.doc,.docx) or pdf.</li>
										<li>Send your abstract along with full paper to svcepapierremise2k15@gmail.com on or before 30/08/2015.</li>
										<li>Confirmation mail will be sent to the selected papers on 3/09/2015.</li>
										<li>Selected candidates should bring two hardcopies of paper and presentation in pendrive during the event.</li>
										<li>Participants will be given 7 minutes to explain their ideas.</li>
										<li>An author can register for only one paper.</li>
										<li>Decision of judges will be final. </li>
										<hr>
										<h2>Important dates:</h2>
										<li>29th August,2015 - Send Mail Abstract+paper</li>
										<li>1st September,2015 - Selected candidates will receive mail</li>
										<hr>
										<h2>Contact:</h2>
										<li>R. Sangeeth Kumar - 9444582301</li>
								</div>
								<div class="modal-footer" style="border-top: 0px solid #e5e5e5;padding: 0px 250px 20px;">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
					<div id="dumbC" class="modal fade" role="dialog">
						<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h2 class="modal-title">Dumb Charades</h2>
									<h3 class="text-center">say Dumb C</h3>
								</div>
								<div class="modal-body text-center" style="font-size: 23px;line-height:30px;">
										<img src="images/9.jpg"><hr>
										<h2>Description:</h2>
										<p style="color: #0066FF;
">Bring out the geek in you and introduce them to the great actor that you are! This is your chance to show how good an actor and how smart a person you are. We’ve got some exciting rounds and fun twists to the usual DumbC game. Register yourself right now and see yourself become the next Tom Cruise or Jennifer Aniston.  </p>
										<hr>
										<h2>Rules and prerequisites:</h2>
										<!-- <li>Download our app &lt;link&gt;</li> -->
										<li>Only 3 participants allowed per team.</li>
										<li>Each member of the team has to come at least once for gesticulation.</li>
										<li>POINTS: 10 points for guessing,5 points for pass question.</li>
										<li>At the end of each round points are tallied for each team, and top 5 teams make it to the finals after which the winner is declared by the team with the most points.</li>
										<hr>
										<h2>Rounds: (3)</h2>
										<h3>Round 1 TECH-TABOO</h3>
										<li>Taboo is a verbal game played with teams of three players or more with a set of taboo words. </li>
										<h3>Round 2 AUDIO ROUND/MOVIE ROUND</h3>
										<li>A player from each team would have to pick a chit from the pile which has a mix of both audio as well as movie round. Each team therefore, would have to play either of the two depending on the chit. </li>
										

								</div>
								<div class="modal-footer" style="border-top: 0px solid #e5e5e5;padding: 0px 250px 20px;">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>

					<div id="dd" class="modal fade" role="dialog">
						<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h2 class="modal-title">Data Dossier</h2>
									<h3 class="text-center">Tabl(e)oid</h3>
								</div>
								<div class="modal-body text-center" style="font-size: 23px;line-height:30px;">
										<img src="images/5.jpg"><hr>
										<h2>Description:</h2>
										<p style="color: #0066FF;
					">Search, think, dig and mine until you strike data, the “Diamond of the millennia”.
“Can you read tables?”. You CAN’T say NO. ‘cause time tables have tested us through and through. All the time. Now its TIME for TABLES to be IN something . Rather it is time for everything to be in tables. They extract your resources, time and energy. Its time for REVENGE.  So get ready to comprehend and extract from tables. All set? Sweet revenge! There you are! Best offer.
</p>
										<p style="color: #0066FF;
					"><pre class="text-left">CREATE FUNCTION Eligibility(@yr varchar(10))
RETURNS VARCHAR(100);
BEGIN
DECLARE @status varchar(100)
IF yr IN (2,3,4)
{
RETURN “YES register”
}
ELSE
{RETURN “maybe next time”;}
END

CREATE PROCEDURE BestDBEvent AS
BEGIN
SELECT  dbeventname FROM SympoEventsDB
WHERE college= “SVCE” AND symponame= “INTERRUPT”
PRINT Eligibility(**Enter Studentyr**)
IF (“YOURNAME” IN (SELECT * FROM round2contestants))
PRINT “GOOD LUCK ANALYSING”
ELSE
PRINT “Better luck Next year”
END
GO</pre>
</p>
										<hr>
										<h2>Rules and prerequisites:</h2>
										<li>A knowledge of the basic MySQL queries(select, insert, update, delete, show ,create)[Don’t bother with triggers procedures and functions much].</li>
										<li>No need to query at all for round two.</li>
										<li>Team of 2 or 3 is allowed.</li>
										<hr>
										<h2>Rounds: (2)</h2>
										<li>Query round:
Round one is querying on-site on databases already created.
</li>
										<li>Story round:Analyze the data and form a story out of it. The best story bags the prize.<br>Eg.
											<p>Time - Place<br>
											1.00 - Shopping mall<br>
											2.00 - Restaurant<br>
											3.00 - ATM<br>
											</p>
											<p>Analysis:A person has had fun until the resources had to be replenished at 3:00 and so on.</p>
										</li>

								</div>
								<div class="modal-footer" style="border-top: 0px solid #e5e5e5;padding: 0px 250px 20px;">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>

					<div id="cb" class="modal fade" role="dialog">
						<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h2 class="modal-title">Code Ninja</h2>
									<h3 class="text-center">Trifecta</h3>
								</div>
								<div class="modal-body text-center" style="font-size: 23px;line-height:30px;">
										<img src="images/6.jpg"><hr>
										<h2>Description:</h2>
										<p style="color: #0066FF;
					">Three steps to geek-dom::</p>
										<li>Annihilate</li>
										<li>Transpose</li>
										<li> Cipher</li>
										<hr>
										<h2>Rules and prerequisites:</h2>
										<li>Team event - 3members per team</li>
										<li>All events are on spot(in app as well as pen-and-paper).</li>
										<li>Let Basic programming knowledge(java is not necessary c,c++ will do), pattern recognition and common sense guide you. </li>
										<hr>
										<h2>Rounds: (3)</h2>
										<li>Debugging : “repair and redress” Hey there! Error Spotter!!</li>
										<li>Reverse Coding: “can u back pedal?” Backtrack, and find the source (code).</li>
										<li>Coding: : “Indite, indent ,innovate” Use logic to do the magic and you are now a geek.</li>

								</div>
								<div class="modal-footer" style="border-top: 0px solid #e5e5e5;padding: 0px 250px 20px;">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>

					<div id="coc" class="modal fade" role="dialog">
						<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h2 class="modal-title">Clash of Coders</h2>
									<h3 class="text-center">Online coding</h3>
								</div>
								<div class="modal-body text-center" style="font-size: 23px;line-height:30px;">
										<img src="images/7.jpg"><hr>
										<h2>Description:</h2>
										<p style="color: #0066FF;
">
<pre class="text-left">Class FindWhatsOnYourMind{
Enum StatesEveryday{
	BORED, DOODLING, TEXTING, SLEEPING
};
Enum OnSept7th{
EXCITED, RUNNING, HAPPY, ENJOYING, ACTUALLY_LEARNING
};
String day,date,Venue;
Public static void main( String [] args)
{
getDateDayLocation();/* write ui or something to get the date and venue*/
try{
if(Date != (depending  on how we get input)Sept7th)
{
/*choosing a random value from StatesEveryday*/
StatesEveryday x= StatesEveryday.values()[newRandom().nextInt(StatesEveryday.values().length)];
System.out.println(“I am”+x);
}
Else
{
throw new InterruptedException();
}	}
catch(InterruptedException e){
 assert (Venu.equalsIgnoreCase(“svce”)) (“Must go to SVCE soon”);
System .out.println(“Hah Yay, I am caught in the exceptional INTERRUPT”+ “ \n I am”);
for(OnSept7th o: OnSept7th.values())
{
System.out.print(o+ “\t”);
}}}</pre>
</p>

										<hr>
										<h2>Rules and prerequisites:</h2>
										<li>Online coding (Work from home)!!!</li>
										<li>NOT  a TEAM event. </li>
										<hr>
										<h2>Rounds: (2)</h2>
										<li>Write only 10-12 lines and make magic.</li>
										<li>This takes perseverance and endurance. Can you extrapolate your creational and application skills.</li>

								</div>
								<div class="modal-footer" style="border-top: 0px solid #e5e5e5;padding: 0px 250px 20px;">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>

					<div id="nyg" class="modal fade" role="dialog">
						<div class="modal-dialog">

							<!-- Modal content-->
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<h2 class="modal-title">Quizzler</h2>
									<h3 class="text-center">Online event</h3>
								</div>
								<div class="modal-body text-center" style="font-size: 23px;line-height:30px;">
										<img src="images/8.jpg"><hr>
										<h2>Description:</h2>
										<p style="color: #0066FF;
">Forget the subject, take a break and use CS for Common Sense and not Computer Science for a while.
Connect images, view the unseen, organize your thoughts and indulge in the process of finding the needful.
</p>
										<hr>
										<h2>Rules and prerequisites:</h2>
										<li>No programming knowledge is needed.</li>
										<li>Basic skills for aptitude and reasoning.</li>
										<hr>
										<h2>Rounds: (2)</h2>
										<li>Exciting and intriguing teasers, incomplete one liners ,etc.</li>
										<li>Test your IQ. Puzzles await you.</li>
											<a href="quizzler.php">Play now</a>
								</div>
								<div class="modal-footer" style="border-top: 0px solid #e5e5e5;padding: 0px 250px 20px;">
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>

</div>

   </div>
  <!--/events Plus Filters -->

  <div class="events-bottom"></div>

  <!-- Project Page Holder-->
  <div id="project-page-holder">
    <div class="clear"></div>
    <div id="project-page-data"></div>
  </div>
  <!--/Project Page Holder-->

</section>
<!--/events -->

<!--new_events-->

<div class="c-logo-part" style="margin-top: 0px;">
  <div class="container">
    <ul class="delay-06s animated  bounce wow">
			<h2 class="pull-left">Sponsers</h2>
      <li><a href="http://www.glosys.co.in/"><img id="sponsers" src="img/1.jpg" alt="" height="100px" width="200px"></a></li>
      <li><a href="http://www.perfecttech.in/"><img id="sponsers" src="img/2.png" alt="" height="100px" width="200px"></a></li>
    </ul>
  </div>
</div> 
<!--c-logo-part-end-->


<section class="main-section team" id="team"><!--main-section team-start-->
  <div class="container">
    <h2>Amazing Team</h2>
    <h6>Take a closer look into our amazing team.</h6>
    <div class="team-leader-block clearfix">
      <div class="team-leader-box">
        <div class="team-leader wow fadeInDown delay-03s">
          <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
          <img src="img/profile1.jpg" height="293px" width="293px" alt="">

        </div>
        <h2 class="wow fadeInDown delay-03s">Srinivasan</h2>
        <span class="wow fadeInDown delay-03s"><h3>Co-ordinator</h3></span>

      </div>
      <div class="team-leader-box">
        <div class="team-leader  wow fadeInDown delay-06s">
          <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
          <img src="img/profile2.jpg" height="293px" width="293px" alt="">

        </div>
				<h2 class="wow fadeInDown delay-03s">Arun</h2>
        <span class="wow fadeInDown delay-03s"><h3>President</h3></span>

      </div>
      <div class="team-leader-box">
        <div class="team-leader wow fadeInDown delay-09s">
          <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
          <img src="img/profile3.jpg" height="293px" width="293px" alt="">

        </div>
				<h2 class="wow fadeInDown delay-03s">Adithya</h2>
        <span class="wow fadeInDown delay-03s"><h3>Secretary</h3></span>

      </div>
			<!-- <div class="col-xs-6 col-sm-4"></div> -->
			<div class="col-md-4"></div>
      <div class="team-leader-box text-center col-md-4" style="padding-left: 0px;
    padding-right: 0px;">
        <div class="team-leader wow fadeInDown delay-03s">
          <div class="team-leader-shadow"><a href="javascript:void(0)"></a></div>
          <img src="img/profile4.jpg" height="293px" width="293px" alt="">

        </div>
        <h2 class="wow fadeInDown delay-03s">Santhosh</h2>
        <span class="wow fadeInDown delay-03s"><h3>Web Developer,interrupt '15</h3></span>
			</div>
			<div class="col-md-4"></div>
      </div>
  </div>
</section>
<!--main-section team-end-->

<section class="twitter-feed"><!--twitter-feed-->
  <div class="container  animated fadeInDown delay-07s wow">
		<h2>Social Portal</h2>
    <div class="fb-page" data-href="https://www.facebook.com/svceinterrupt" data-width="500" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
			<div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/svceinterrupt"><a href="https://www.facebook.com/svceinterrupt">SVCE Interrupt</a></blockquote>
			</div>
		</div>
		</div>
</section>
<!--twitter-feed-end-->
<footer class="footer_section" id="contact">
  <div class="container">
    <section class="main-section contact" id="contact">
      <div class="contact_section">
        <h2>Contact Us</h2>
        <div class="row">
          <div class="col-lg-4">
            <div class="contact_block">
              <div class="contact_block_icon rollIn animated wow"><span><i class="fa-home"></i></span></div>
              <span>  Chennai-Bengaluru High Road, Pennalur Village,<br> Kancheepuram District, Sriperambudur
								<br> TamilNadu 602117</span> </div>
          </div>
          <div class="col-lg-4">
            <div class="contact_block">
              <div class="contact_block_icon icon2 rollIn animated wow"><span><i class="fa-phone"></i></span></div>
              <span> +91-9043567123 </span> </div>
          </div>
          <div class="col-lg-4">
            <div class="contact_block">
              <div class="contact_block_icon icon3 rollIn animated wow"><span><i class="fa-pencil"></i></span></div>
              <span> <a href="mailto:interrupt15@gmail.com"> interrupt2k15@gmail.com</a> </span> </div>
          </div>
        </div>
      </div>
        <div class="wow fadeInLeft text-center">
          <div class="contact-info-box address clearfix">
            <h2 style="color: #fff;">Don’t be shy. Say hello!</h2>
            <h1 class="text-center">Thank YOU!</h1>
						<h3>Visit Again</h3>
          </div>
        </div>
    </section>
  </div>
  <div class="container">
    <div class="footer_bottom"> <span> © 2015 Interrupt . </span> </div>
  </div>
</footer>
<script>
window.closeModal = function(){
    $('#log').modal('hide');
};
</script>
<script type="text/javascript">
    $(document).ready(function(e) {
        $('#header_outer').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false

        });

    });
</script>
<script type="text/javascript">
			$(function() {

				var Page = (function() {

					var $navArrows = $( '#nav-arrows' ).hide(),
						$shadow = $( '#shadow' ).hide(),
						slicebox = $( '#sb-slider' ).slicebox( {
							onReady : function() {
								$navArrows.show();
								$shadow.show();

							},
							orientation : 'r',
							cuboidsRandom : true,
							disperseFactor : 30
						} ),

						init = function() {

							initEvents();

						},
						initEvents = function() {

							// add navigation events
							$navArrows.children( ':first' ).on( 'click', function() {

								slicebox.next();
								return false;

							} );

							$navArrows.children( ':last' ).on( 'click', function() {

								slicebox.previous();
								return false;

							} );

						};

						return { init : init };

				})();

				Page.init();

			});
		</script>
<script type="text/javascript">
function letterer(element){
	if( !document.createTreeWalker ) return false;

	var letter, letterElm, parent, wordElm, letters, walker, node,
		supportsTrim = String.prototype.trim;

	walker = document.createTreeWalker(element, NodeFilter.SHOW_TEXT, null, false);

	while( node = walker.nextNode() ){
	   if( node.nodeType == 3 ){
			if( supportsTrim ? node.nodeValue.trim() : node.nodeValue ){
				letters = node.nodeValue.split('').reverse();
				wordElm = document.createElement('word');
				node.nodeValue = '';
				parent = node.parentNode;
				// do this for every letter in this text-node
				while( letter = letters.pop() ){
					letterElm = document.createElement('letter');
					letterElm.className = 'initial'; // add a class for transition purposes
					letterElm.innerHTML = letter;

					// check for a space
					if( letter == ' ' ){
						parent.insertBefore( wordElm, node );
						wordElm = document.createElement('word');
						parent.insertBefore( letterElm, node );
					}
					else
						wordElm.appendChild(letterElm);
				}
				parent.insertBefore( wordElm, node );
			}
		}
	}
}
</script>

<script type="text/javascript">
var lettersWrap = document.getElementById('mainText'),
	letters,
	delay = 50, // initial delay
	delayJump = 20, // adjust this
	totalLetters;

// Break to letters
letterer( lettersWrap );
lettersWrap.style.display = 'block';
// get all "letter" elements

letters = lettersWrap.getElementsByTagName('letter');
totalLetters = letters.length;

for( var i=0; i < totalLetters; i++ ){
doTimer(letters[i], delay);
delay += delayJump;
// if the letter is a "space" then pause for a little more, to have some delay between words
if( letters[i].innerHTML == ' ' )
	delay += delayJump * 2;
}

function doTimer(letter, delay){
setTimeout(function(){
	letter.removeAttribute('class');
}, delay);
}
</script>
<script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();

  </script>
<script type="text/javascript">
	<!--
  $(document).ready(function () {
    $(".toggle li a").click(function(event) {
        $(".toggle").toggle();;
    });
  });
	$(window).load(function(){

		$('a').bind('click',function(event){
			var $anchor = $(this);

			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 91
			}, 1500,'easeInOutExpo');

			event.preventDefault();
		});
	});
	 //-->
</script>


<script type="text/javascript">


  jQuery(document).ready(function($){
// events Isotope
	var container = $('#events-wrap');


	container.isotope({
		animationEngine : 'best-available',
	  	animationOptions: {
	     	duration: 100,
	     	queue: false
	   	},
		layoutMode: 'fitRows'
	});

	$('#filters a').click(function(){
		$('#filters a').removeClass('active');
		$(this).addClass('active');
		var selector = $(this).attr('data-filter');
	  	container.isotope({ filter: selector });
        setProjects();
	  	return false;
	});


		function splitColumns() {
			var winWidth = $(window).width(),
				columnNumb = 1;


			if (winWidth > 1024) {
				columnNumb = 4;
			} else if (winWidth > 900) {
				columnNumb = 2;
			} else if (winWidth > 479) {
				columnNumb = 2;
			} else if (winWidth < 479) {
				columnNumb = 1;
			}

			return columnNumb;
		}

		function setColumns() {
			var winWidth = $(window).width(),
				columnNumb = splitColumns(),
				postWidth = Math.floor(winWidth / columnNumb);

			container.find('.events-item').each(function () {
				$(this).css( {
					width : postWidth + 'px'
				});
			});
		}

		function setProjects() {
			setColumns();
			container.isotope('reLayout');
		}

		container.imagesLoaded(function () {
			setColumns();
		});


		$(window).bind('resize', function () {
			setProjects();
		});

});
$( window ).load(function() {
	jQuery('#all').click();
	return false;
});

</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66382281-1', 'auto');
  ga('send', 'pageview');

</script>
</body>
</html>
