
<div class="container" style=" margin-top: 40px; margin-bottom: 100px;">
	<ng-view></ng-view>
</div>


<script>
var app = angular.module("myApp", ["ngRoute"]);

app.config(function($routeProvider) {
    $routeProvider
    .when("/", {
        templateUrl : "home"
    })
	.when("/new", {
		templateUrl: "new",
		controller: "newApp"
	})
	.when("/template", {
		templateUrl: "template",
		controller: "template"
	})
	.when("/manage", {
		templateUrl: "manage",
		//controller: "template"
	})
	.when("/pages", {
		templateUrl: "template",
		controller: "template"
	})
	.when("/pages/:page_id", {
		templateUrl: "template",
		controller: "template"
	})
});

app.controller("global", function($scope, $routeParams, $location){
	$scope.napp = capp;
	$scope.appTemplates = [
		{
			code: "single",
			name: "<?= T::x("Aplikasi Paparan Runggal") ?>",
			image: "<?= PORTAL ?>assets/images/templates/single.png"
		},
		{
			code: "singleNoActionBar",
			name: "<?= T::x("Aplikasi Paparan Runggal serta bar menu") ?>",
			image: "<?= PORTAL ?>assets/images/templates/singleNoActionBar.png"
		},
		{
			code: "leftDrawer",
			name: "<?= T::x("Aplikasi Laci Kiri") ?>",
			image: "<?= PORTAL ?>assets/images/templates/leftDrawer.png"
		},
		{
			code: "tabbedPage",
			name: "<?= T::x("Aplikasi Paparan Tab") ?>",
			image: "<?= PORTAL ?>assets/images/templates/tabbedPage.png"
		},
		{
			code: "leftDrawerWithTabbedPage",
			name: "<?= T::x("Aplikasi Laci Kiri serta Paparan Tab") ?>",
			image: "<?= PORTAL ?>assets/images/templates/leftDrawerWithTabbedPage.png"
		}
	];
	
	$scope.pageTemplates = [
		{
			code: "single",
			name: "<?= T::x("Aplikasi Paparan Runggal") ?>",
			image: "<?= PORTAL ?>assets/images/templates/single.png"
		},
		{
			code: "singleNoActionBar",
			name: "<?= T::x("Aplikasi Paparan Runggal serta bar menu") ?>",
			image: "<?= PORTAL ?>assets/images/templates/singleNoActionBar.png"
		},
		{
			code: "tabbedPage",
			name: "<?= T::x("Aplikasi Paparan Tab") ?>",
			image: "<?= PORTAL ?>assets/images/templates/tabbedPage.png"
		}
	];
	
	$scope.cancelApp = function(){
		capp = {
			basic: {
				name: "",
				about: ""
			},
			pages: []
		};
		
		$location.path("/");
	}
});

app.controller("newApp", function($scope, $routeParams, $location){
	$scope.app_name = capp.basic.name;
	$scope.app_about = capp.basic.about;
	
	$scope.validateBasicInfo =  function(){
		if($scope.app_name == "" || $scope.app_about == ""){
			console.log("name & about are required.");
		}else{			
			capp.basic = {
				name: $scope.app_name,
				about: $scope.app_about
			}
			
			$location.path("/template");
		}
	};
});


app.controller("template", function($scope, $routeParams, $location){
	$scope.pickTemplate = function(code){
		capp.type = code;
		
		if(code == "single"){
			capp.pages = [
				{
					title: "",
					url: "",
					content: "",
					actionBar: true
				}
			];
		}else if(code == "singleNoActionBar"){
			capp.pages = [
				{
					title: "",
					url: "",
					content: "",
					actionBar: false
				}
			];
		}else{
			capp.pages = [];
		}
		
		$location.path("/manage");
	}
});




























</script>