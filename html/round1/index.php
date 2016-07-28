<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Online Coding Round 1  MCQ</title>
	<link rel="icon" href="favicon.png" type="image/png">
	<link href="assets/libs/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/libs/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css">
	 <link rel="stylesheet" href="assets/libs/codemirror/codemirror.css">
	 <link rel="stylesheet" href="assets/css/common-style.css">
	 <link rel="stylesheet" href="assets/libs/ui-select/select.min.css">
	 <meta http-equiv="pragma" content="nocache">
	 <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <script src="assets/libs/codemirror/codemirror.js"></script>

    <script src="assets/libs/codemirror/foldcode.js"></script>
    <!--script src="assets/libs/codemirror/javascript.js"></script-->
    <script src="assets/libs/codemirror/clike.js"></script>
	 <base href="/round1/">  
	
</head>
<body ng-app="mainApp" ng-controller="mainCtrl">
	<nav class="navbar navbar-default "  >
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#" style="color:white">Online Coding Round 1 - MCQ</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <p class="navbar-text navbar-right" style="color:white;margin-right:10px;">Signed in as {{user.name}}</p>
	  </div><!-- /.container-fluid -->
</nav>


	

	<section ui-view >
 		{{session}}
	</section>

	<script src="assets/libs/angular/angular.min.js"></script>
	<script src="assets/libs/angular/angular-ui-router.js"></script>
	 <script src="assets/libs/angular/ui-codemirror.js"></script>
	 <script src="assets/libs/ui-select/select.min.js"></script>
	<script src="js/main.js"></script>
	<script type="text/javascript" src="assets/libs/jquery/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="assets/libs/bootstrap/js/bootstrap.js"></script>
	
</body>
</html>
