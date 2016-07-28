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
        }
        </style>
        <link href="http://code.jquery.com/ui/1.10.2/themes/smoothness/jquery-ui.css" rel="Stylesheet"></link>
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>
    <body>
        <div class="container">
                        <div class="well bs-component">
                            <h1 id="inits" style="display:none;">Registration Successfull</h1>
                            <h1 id="initf" style="display:none;">Registration Failed Pls try later</h1>
                            <form id="theform" class="form-horizontal" action="" method="post">
                                <fieldset>
                                    <div class="form-group">
                                      <div class="col-lg-10">
                                        <input type="text" required class="form-control floating-label" name="name" placeholder="Your Name">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-lg-10">
                                        <label for="searchBox" ></label>
	                                      <input type="text" required class="form-control floating-label" name="colName" placeholder="Your College Full Name "id="searchBox"  />
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-lg-10">
                                        <select class="form-control floating-label" name="deptname" placeholder="Your Department">
                                          <option>CSE</option>
                                          <option>AUT</option>
                                          <option>BIO</option>
                                          <option>CHE</option>
                                          <option>CVL</option>
                                          <option>ECE</option>
                                          <option>EEE</option>
                                          <option>IT</option>
                                          <option>MAR</option>
                                          <option>MEC</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-lg-10">
                                        <input type="text" required class="form-control floating-label" name="phone" placeholder="Your Phone Number" pattern="[789][0-9]{9}">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-lg-10">
                                        <select class="form-control floating-label" name="year" placeholder="Year">
                                          <option>I</option>
                                          <option>II</option>
                                          <option>III</option>
                                          <option>IV</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-lg-10">
                                        <input type="email" required class="form-control floating-label" name="email" placeholder="Email">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="col-lg-10">
                                        <input type="password" pattern=".{6,}" required class="form-control floating-label" name="pass" placeholder="Password(Must contain at least 6 or more characters)">
                                      </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="g-recaptcha" data-sitekey="6LdNPAsTAAAAADiqsTMwWa2eYZp8zc9MnyOW8oX_"></div>
                                    </div>
				    <h3>Info: Pls enter the correct details as these information only helps you to get your certificate</h3>
                                    <div class="form-group">
                                        <div class="col-lg-10 col-lg-offset-2">
                                            <button type="reset" class="btn btn-default">Clear</button>
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
                    url: 'join.php', // form action url
                    type: 'POST', // form submit method get/post
                    cache: false,
                    dataType: 'html', // request type html/json/xml
                    data: form.serialize(), // serialize form data
                    beforeSend: function() {
                        $("#inits").hide();
                        $("#initf").hide();
                        submit.html('Submitting....'); // change submit button text
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
        <script>
        	$(document).ready(function() {
        		var myArr = [];

        		$.ajax({
        			type: "GET",
        			url: "col.xml", // change to full path of file on server
        			dataType: "xml",
        			success: parseXml,
        			complete: setupAC,
        			failure: function(data) {
        				alert("XML File could not be found");
        				}
        		});

        		function parseXml(xml)
        		{
        			//find every query value
        			$(xml).find("item").each(function()
        			{
        				myArr.push($(this).text());
        			});
        		}

        		function setupAC() {
        			$("input#searchBox").autocomplete({
        				source: function( request, response ) {
        				    var matcher = new RegExp( "^" + $.ui.autocomplete.escapeRegex( request.term ), "i" );
        				    response( $.grep( myArr, function( item ){
        				        return matcher.test( item );
        				    }) );
        				},
        				minLength: 1,
        				select: function(event, ui) {
        					$("input#searchBox").val(ui.item.value);

        				}
        			});
        		}
        	});
        </script>

    </body>
</html>
