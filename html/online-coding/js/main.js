var mainApp = angular.module('mainApp', ['ui.router','ui.codemirror','ui.select']);
mainApp.config(['$sceProvider', '$locationProvider',
function($sceProvider, $locationProvider) {
	// Completely disable SCE.  For demonstration purposes only!
	// Do not use in new projects.
	$sceProvider.enabled(true);
	// use the HTML5 History API
	$locationProvider.html5Mode(true);
	$locationProvider.hashPrefix('!');

}]);
mainApp.config(['$stateProvider', '$urlRouterProvider',function($stateProvider, $urlRouterProvider) {
	$stateProvider.state('milkMan', {
		url : '/milkMan',
		templateUrl : '/online-coding/milkMan.html'

	
}).state('/', {
	url : "/",
	redirect :'/online-coding/index.php'
}).state('login',{
	url: "/login",
	templateUrl : '/online-coding/login-register.html'
}).state('matrixPrint',{
	url:"/matrixPrint",
	templateUrl: '/online-coding/matrixPrint.html'
}).state('waterManagement',{
	url:"/waterManagement",
	templateUrl:"/online-coding/waterManagement.html"
}).state('robot',{
	url:"/robot",
	templateUrl:"/online-coding/robot.html"
}).state('hotelTrip',{
	url: "/hotelTrip",
	templateUrl:"/online-coding/hotelTrip.html"
})
}]);



mainApp.directive('codeBox', function() {
	return {
		restrict : 'E',
		templateUrl : '/online-coding/codeBox.html'
	};
});

mainApp.factory('appFactory',['$http',
	function($http){
		var dataFactory = {};
		dataFactory.getLoginDetails = function(){
			var messageInformationReq = {
				method :'GET',
				url : 'check.php',
				dataType : "json"
		};
		return $http(messageInformationReq);
	};

	dataFactory.postAnswer = function(option,code,qNo){
		
		var messageInformationReq = {
			method : 'POST',
			url:'testcases/l.php',
			params : {
				option : option,
				code : code,
				qNo : qNo
			},
			dataType: "json"
		};
		return $http(messageInformationReq);
	}
	return dataFactory;
	
}]);

mainApp.service('appService',['appFactory',
	function(appFactory){
		var service = {};

		service.getLoginDetails = function(callback){

			appFactory.getLoginDetails().success(function(response){
			var raw_json = JSON.stringify(response);
			var parsed_json = JSON.parse(raw_json);
			
					callback(parsed_json);
			
			return true;
		}).error(function() {
			callback(false);
	}) ;
}
	service.postAnswer = function(option,code,qNo,callback)
	{
		appFactory.postAnswer(option,code,qNo).success(function(response){
			var raw_json = JSON.stringify(response);
			var parsed_json = JSON.parse(raw_json);
			callback(parsed_json);
			return true;
		}).error(function(){
			callback(false);
	});
		
}
	return service;
}]);

mainApp.controller('mainController',['$scope','appService','$location','$window',function($scope,appService,$location,$window){
	 $scope.editorOptions = {
        lineWrapping : true,
        lineNumbers: true,
        
        mode: 'text/x-csrc',
    };
    $scope.user = {};
    //$scope.session ='<?php  echo "lol" ?>';
    getlogin = function(){
    	appService.getLoginDetails(function(response) {
    		if(response == 23)
    		{
    			$location.path('login')
    		}
    		else {
    			$scope.user = response;
 			if($scope.user.current2 != 30)
    			{
    				window.location.href = '/round1/';
    			}
   			if($scope.user.current ==5 )
    			{
    				$location.path('milkMan');
    			}
    			else if($scope.user.current == 1)
    			{
    				$location.path('matrixPrint');
    			}
    			else if($scope.user.current == 2)
    			{
    				$location.path('waterManagement');
    			}
    			else if($scope.user.current == 3)
    			{
    				$location.path('robot');

    			}
    			else if($scope.user.current == 4)
    			{
    				$location.path('hotelTrip');
    			}
    			
    		}
    	})
    }
  	getlogin();
  	$scope.finish  = false;
  	$scope.testcase = {};
  	$scope.selected = 1;
  	$scope.submitAnswer = function(qNo,option,code)
  	{
  		appService.postAnswer(option,code,qNo,function(response){ 
  			if(!response.error)
  			{	$scope.finish = true;
  				$scope.result = response.message;
  				$scope.testcase.testcase0 = response.testcase0;
  				$scope.testcase.testcase1= response.testcase1;
  				$scope.testcase.testcase2= response.testcase2;
  				$scope.testcase.testcase3= response.testcase3;
  				$scope.testcase.testcase4= response.testcase4;

  			}
  			else {
  				$scope.finish = false;
  				$scope.result = response.message;
  				$scope.testcase.testcase0 = response.testcase0;
  				$scope.testcase.testcase1= response.testcase1;
  				$scope.testcase.testcase2= response.testcase2;
  				$scope.testcase.testcase3= response.testcase3;
  				$scope.testcase.testcase4= response.testcase4;
  			}

  		})
  	}
  	$scope.redirect = function()
  	{
  		$window.location.reload();
  	}

}]);
