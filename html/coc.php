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
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Clash of Coders &middot; Interrupt '15</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="login/css/roboto.min.css" rel="stylesheet">
        <link href="login/css/material-fullpalette.min.css" rel="stylesheet">
        <link href="login/css/ripples.min.css" rel="stylesheet">
        <link href="login/css/styles.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66382440-1', 'auto');
  ga('send', 'pageview');

</script>
        <style>
            body{padding-top:50px}#banner{border-bottom:none}.page-header h1{font-size:4em}.bs-docs-section{margin-top:8em}.bs-component{position:relative}.bs-component .modal{position:relative;top:auto;right:auto;left:auto;bottom:auto;z-index:1;display:block}.bs-component .modal-dialog{width:90%}.bs-component .popover{position:relative;display:inline-block;width:220px;margin:20px}#source-button{position:absolute;top:0;right:0;z-index:100;font-weight:bold;padding: 5px 10px;}.progress{margin-bottom:10px}footer{margin:5em 0}footer li{float:left;margin-right:1.5em;margin-bottom:1.5em}footer p{clear:left;margin-bottom:0}.splash{padding:4em 0 0;background-color:#141d27;color:#fff;text-align:center}.splash h1{font-size:4em}.splash #social{margin:2em 0}.splash .alert{margin:2em 0}.section-tout{padding:4em 0 3em;border-bottom:1px solid rgba(0,0,0,0.05);background-color:#eaf1f1}.section-tout .fa{margin-right:.5em}.section-tout p{margin-bottom:3em}.section-preview{padding:4em 0 4em}.section-preview .preview{margin-bottom:4em;background-color:#eaf1f1}.section-preview .preview .image{position:relative}.section-preview .preview .image:before{box-shadow:inset 0 0 0 1px rgba(0,0,0,0.1);position:absolute;top:0;left:0;width:100%;height:100%;content:"";pointer-events:none}.section-preview .preview .options{padding:1em 2em 2em;border:1px solid rgba(0,0,0,0.05);border-top:none;text-align:center}.section-preview .preview .options p{margin-bottom:2em}.section-preview .dropdown-menu{text-align:left}.section-preview .lead{margin-bottom:2em}@media (max-width:767px){.section-preview .image img{width:100%}}.sponsor{text-align:center}.sponsor a:hover{text-decoration:none}@media (max-width:767px){#banner{margin-bottom:2em;text-align:center}}
            .infobox .btn-sup { color: rgba(0,0,0,0.5); font-weight: bold; font-size: 15px; line-height: 30px; }
            .infobox .btn-sup img { opacity: 0.5; height: 30px;}
            .infobox .btn-sup span { padding-left: 10px; position: relative; top: 2px; }
            .icons-material .row { margin-bottom: 20px; }
            .icons-material .col-xs-2 { text-align: center; }
            .icons-material i { font-size: 34pt; }

            .icon-preview {
                display: inline-block;
                padding: 10px;
                margin: 10px;
                background: #D5D5D5;
                border-radius: 3px;
                cursor: pointer;
            }
            .icon-preview span {
                display: none;
                position: absolute;
                background: black;
                color: #EEE;
                padding: 5px 8px;
                font-size: 15px;
                font-family: Roboto;
                border-radius: 2px;
                z-index: 10;
            }
            .icon-preview:hover i { color: #4285f4; }
            .icon-preview:hover span { display: block; cursor: text; }

        </style>
        <style>
        .keez:hover {
            opacity: 0;
            transition: opacity .70s ease-in-out;
            -moz-transition: opacity .70s ease-in-out;
            -webkit-transition: opacity .70s ease-in-out;
        }
        .keez {
            opacity: 1.0;
            transition: opacity .70s ease-in-out;
            -moz-transition: opacity .70s ease-in-out;
            -webkit-transition: opacity .70s ease-in-out;
        }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="text-center">
				<div class="wow animated slideInDown" data-wow-delay="300ms">
					<img  src="img/int.png" class="center-block rotart" height="150px" width="150px">
				</div>
			</div>
        	<div class="wow delay-04s animated slideInUp "data-wow-delay="1200ms">
				<a href="index.php" style="text-decoration:none !important;"><h2 id="keek" class="text-center" style="text-transform: uppercase !important; text-decoration:none !important; font-size: 60px;  color:#009688; font-weight: 400;">Interrupt '15</h2></a>
			</div>
        </div>      
        <hr>
        <div class="container text-center" style="border-radius: 25px; border: 2px solid #009688;">
            <h1>Clash of Coders </h1>
            
     	
      
	Let's <a href="/round1/" class="btn btn-flat btn-primary">Play</a>
      
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
                <div class="row">
                    <div class="col-lg-6">
                        <div class="well bs-component">
                            <legend>About Clash of Coders</legend>
                            <p>What's it? </p>
                               <p>Interrupt 2k15 has an Epic Online Coding Competetion starting off with a light MCQ questions. Answer questions as much as possible and quickly too. Participate - Complete - Go offline with Gifts</p>
                               <pre>PLOT :

 Each level consists of 15 questions.
	1)The contest has two rounds.

	2)Round 1:

This has a variety of questions .This round will clam you down before you enter some serious

coding.question in this round are connections,Jumbled program,debugging and output prediction.

Relax! All questions are multiple choice questions with no negative marks.

 The Perk : You can go to the next question without answering the previous question.!!.

 	3) Round 2 :
a)This round has 5 questions.

b)You can use c/c++ to write programs.

c)Input must be obtained from standard input(scanf or cin) and output must be redirected to

standard output(printf or cout).

d)the output must be in the format specified in the sample output

c)One question must be completed to view the next one.

</pre>
                               <br>
                            <legend>Rules</legend>
                            <ul>
                                <li>Only students are allowed to participate in the event.</li> 
                                <li>The event can be resumed at any point of time.</li> 
                                <li>The benefit will be given for those who finish at a stretch.</li> 
                                <li>Judges Decisions are Final</li> 
                                <li>A user can play the game only once.</li> 
                               
                            </ul>
                            <br>e
                            
                        </div>
                    </div>
                    <div class="col-lg-4 col-lg-offset-1">
                        <div class="well bs-component">
                            <legend>Leaderboard</legend>
                            <p>Coming soon</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script src="login/js/ripples.min.js"></script>
        <script src="login/js/material.min.js"></script>

        <script>
            $(function() {
                $.material.init();

            });
        </script>
        
    </body>
</html>
