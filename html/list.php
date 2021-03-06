<?php
  session_start();
  require_once('dbConnect.php');
  $sql = dbConnect();
  if (!isset($_SESSION['email'])) {
    if (isset($_COOKIE['email']) && isset($_COOKIE['id'])&& isset($_COOKIE['name'])) {
      $_SESSION['email'] = $_COOKIE['email'];
      $_SESSION['id'] = $_COOKIE['id'];
      $_SESSION['name'] = $_COOKIE['name'];
      $user_id=$_SESSION['id'];
    }
  }
  $user_id=$_SESSION['id'];
  $query = "SELECT * FROM interrupt.events WHERE user_id='$user_id'";
  $data = mysqli_query($sql,$query);
  if (mysqli_num_rows($data)== 1) {
	$row = mysqli_fetch_array($data);
	$eventArr = array('online_code','online_hunt','coding','myb','db','paper','bombsquad','datastructure','dumbc');
	$events=array();
	array_push($events,$row['online_code'],$row['online_hunt'],$row['coding'],$row['myb'],$row['db'],$row['paper'],$row['bombsquad'],$row['datastructure'],$row['dumbc']);

 }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registration &middot; Interrupt '15</title>
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
        }​
        </style>
        <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body>
        <div class="container">
                        <div class="well bs-component" style="padding-left: 30px;">
                          <h1 id="inits" style="display:none;">Subscription Successfull</h1>
                          <h1 id="initf" style="display:none;">Subscription Failed Pls try later</h1>
                            <form id="theform" class="form-horizontal" method="post">
                                <fieldset>
                                  <div class="form-group">
                                    <div class="togglebutton">
                                        <label>
					    <?php if($events[0]==1){ ?>
                                            <input type="checkbox" name="event[]" value="0" checked> Clash of Coders
		  			    <?php }else{ ?>
						<input type="checkbox" name="event[]" value="0" > Clash of Coders
						<!-- <input type='hidden' name="event[]" value="0" > Clash of Coders -->

						<?php } ?>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group">
                                  <div class="togglebutton">
                                      <label>
<?php if($events[1]==1){ ?>
                                            <input type="checkbox" name="event[]" value="1" checked> Hint Forage
		  			    <?php }else{ ?>
						<input type="checkbox" name="event[]" value="1"> Hint Forage
						<!-- <input type='hidden' name="event[]" value="1"> Hint Forage -->

						<?php } ?>

                                                      </label>
                                  </div>
                              </div>
                              <div class="form-group">
                                <div class="togglebutton">
                                    <label>
<?php if($events[2]==1){ ?>
                                            <input type="checkbox" name="event[]" value="2" checked> Code Ninja
		  			    <?php }else{ ?>
						<input type="checkbox" name="event[]" value="2"> Code Ninja
						<!-- <input type='hidden' name="event[]" value="2"> Code Ninja -->
						<?php } ?>

                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                              <div class="togglebutton">
                                  <label>
<?php if($events[3]==1){ ?>
                                            <input type="checkbox" name="event[]" value="3" checked> MYB v3.0		  			    <?php }else{ ?>
						<input type="checkbox" name="event[]" value="3"> MYB v3.0
						<!-- <input type='hidden' name="event[]" value="3"> MYB v3.0 -->
						<?php } ?>
                                  </label>
                              </div>
                          </div>
                          <div class="form-group">
                            <div class="togglebutton">
                                <label>
<?php if($events[4]==1){ ?>
                                            <input type="checkbox" name="event[]" value="4" checked> Data Dossier

		  			    <?php }else{ ?>
						<input type="checkbox" name="event[]" value="4"> Data Dossier
						<!-- <input type='hidden' name="event[]" value="4"> Data Dossier -->
						<?php } ?>

                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                          <div class="togglebutton">
                              <label>
<?php if($events[5]==1){ ?>
                                            <input type="checkbox" name="event[]" value="5" checked> Papier Remise

		  			    <?php }else{ ?>
						<input type="checkbox" name="event[]" value="5"> Papier Remise
						<!-- <input type='hidden' name="event[]" value="5"> Papier Remise -->
						<?php } ?>
                              </label>
                          </div>
                      </div>
                      <div class="form-group">
                        <div class="togglebutton">
                            <label>
<?php if($events[6]==1){ ?>
                                            <input type="checkbox" name="event[]" value="6" checked> Quizzler		  			    <?php }else{ ?>
						<input type="checkbox" name="event[]" value="6"> Quizzler
						<!-- <input type='hidden' name="event[]" value="6"> Quizzler -->

						<?php } ?>


                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                      <div class="togglebutton">
                          <label>
<?php if($events[7]==1){ ?>
                                            <input type="checkbox" name="event[]" value="7" checked> Data Surfer
		  			    <?php }else{ ?>
						<input type="checkbox" name="event[]" value="7"> Data Surfer
						<!-- <input type='hidden' name="event[]" value="7"> Data Surfer -->

						<?php } ?>

                          </label>
                      </div>
                  </div>
		  <div class="form-group">
                      <div class="togglebutton">
                          <label>
<?php if($events[8]==1){ ?>
                                            <input type="checkbox" name="event[]" value="8" checked> Dumb Charades

		  			    <?php }else{ ?>
						<input type="checkbox" name="event[]" value="8"> Dumb Charades
						<!-- <input type='hidden' name="event[]" value="8"> Dumb Charades -->
						<?php } ?>

                          </label>
                      </div>
                  </div>
                  <div class="form-group">
                      <div class="col-lg-10 col-lg-offset-2">
                          <button type="submit"id="submit" class="btn btn-primary">Submit</button>
                      </div>
                  </div>
                                </fieldset>
                            </form>
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
        <script>
            $(document).ready(function() {
                var form = $('#theform'); // contact form
                var submit = $('#submit');  // submit button
                // form submit event
                form.on('submit', function(e) {
                    e.preventDefault(); // prevent default form submit

                    $.ajax({
                    url: 'event.php', // form action url
                    type: 'POST', // form submit method get/post
                    cache: false,
                    dataType: 'html', // request type html/json/xml
                    data: form.serialize(), // serialize form data
                    beforeSend: function() {
                        $("#inits").hide();
                        $("#initf").hide();
                        submit.html('Submitting....');
                         // change submit button text
                    },
                    success: function(data) {
                        if(data==="passed"){

                            $("#inits").show();
                            var delay=2000; //1 seconds
                            setTimeout(function(){
                              //your code to be executed after 1 seconds
                              window.top.location.reload();
                            }, delay);
                        }
                        else{
                            $("#initf").show();
                            var delay=2000; //1 seconds
                            setTimeout(function(){
                              //your code to be executed after 1 seconds
                            window.top.location.reload();
                            }, delay);

                        }
                        form.hide(); // reset form
                    },
                    error: function(e) {
                        console.log(e)
                    }
                    });
                });
            });
        </script>
        <script src="http://code.jquery.com/ui/1.10.2/jquery-ui.js" ></script>

    </body>
</html>
