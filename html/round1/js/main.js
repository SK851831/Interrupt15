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

mainApp.controller('mainCtrl',['$scope','appService','$location','$window',function($scope,appService,$location,$window){
	$scope.user = {};
	$scope.ajax= false;
	$scope.current =1 ;
	getlogin = function(){
    	appService.getLoginDetails(function(response) {
    		$scope.user = response;
    		 
    		if(response == 23)
    		{	
    			$location.path('login')

    		}	
    		else if($scope.user.curren < 15)
    		{	
    			$scope.user = response;
    			
				$location.path('imageRound');
				$scope.getQuestions($scope.user.curren,0);
				 //$scope.getQuestions(0,0);
				
			}
			else if($scope.user.curren < 30){
				$scope.user = response;
				$location.path('mcq');
				$scope.getQuestions($scope.user.curren,0);
			}else {
	
	                window.location.href = '/online-coding/';


}
	});
    }

    getlogin();

	$scope.master = {};
  	
	$scope.questions = {};
	
	$scope.getQuestions = function(questionNumber,answer){
	$scope.ajax = true;
	++questionNumber;	
	if(questionNumber == 31)
    	{
    		window.location.href = '/online-coding/';
    	}
	 appService.getQuestions(questionNumber,answer,function(response){
	 $scope.ajax = false;	
    	$scope.questions = response;
    	if(questionNumber == 16)
    	{	
    		$location.path('mcq');
    	}
    	
    	});

    }
   

	
    

}]);

mainApp.config(['$stateProvider', '$urlRouterProvider',function($stateProvider, $urlRouterProvider) {
	$stateProvider.state('imageRound', {
		url : '/imageRound',
		templateUrl : '/round1/imageRound.html'

	
}).state('login',{
	url: "/login",
	templateUrl : '/online-coding/login-register.html'
}).state('mcq',{
	url : "/mcq",
	templateUrl : '/round1/mcq.html'
})
}]);

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

	dataFactory.getQuestions = function(qNo,answer)
	{
		var messageInformationReq={
			method: 'POST',
			url: 'fetch.php',
			params : {
				current : qNo,
				answer : answer
			},
			dataType :'json'
		}
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
	});

	}

	service.getQuestions = function(qNo,answer,callback){
		appFactory.getQuestions(qNo,answer).success(function(response){
			var raw_json = JSON.stringify(response);
			var parsed_json = JSON.parse(raw_json);
			callback(parsed_json);
			
			return true;
		}).error(function() {
			callback(false);
		});
	}
	return service;
}]);
