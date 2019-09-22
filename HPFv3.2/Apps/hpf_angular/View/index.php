
<p><a href="#/!">Main</a></p>

<a href="#!red">Red</a>
<a href="#!green">Green</a>
<a href="#!blue">Blue</a>
<br />
<ng-view></ng-view>

<script>
var app = angular.module("myApp", ["ngRoute"]);
app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "home"
    })
    .when("/red", {
        templateUrl : "red"
    })
    .when("/green", {
        templateUrl : "green"
    })
	.when("/blue", {
		templateUrl: "blue"
	})
    .when("/blue/:index", {
        templateUrl : "blue",
		controller: "AppRouteContoller"
    });
});

app.controller("AppRouteContoller", function($scope, $routeParams){
	$scope.x = $routeParams.index;
});
</script>

<p>Click on the links to navigate to "red.htm", "green.htm", "blue.htm", or back to "main.htm"</p>