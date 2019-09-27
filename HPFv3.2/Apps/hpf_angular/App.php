<?php
//A journey start with a step


switch(url::get(0)){
	case "create":
	case "index":
		$page = new Page();
		$page->addTopTag('
			<meta charset="utf-8" />
			
			<link rel="stylesheet" href="'. PORTAL .'assets/css/bootstrap.min.css" />
			
			<script src="'. PORTAL .'assets/js/jquery-3.4.1.min.js"></script>
			<script src="'. PORTAL .'assets/js/popper.min.js"></script>
			<script src="'. PORTAL .'assets/js/bootstrap.min.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
			<script>
				let capp = {
					basic: {
						name: "",
						about: ""
					},
					pages: []
				};
			</script>
			
			<style>
			.templatecol{
				position: relative; 
				margin-bottom: 20px;
			}

			.templateOverlay{
				background-color: rgba(0,0,0,.5); 
				position: absolute; 
				left: 50%; 
				top: 0; 
				transform: translate(-50%); 
				width: 95%; 
				height: 100%;
				cursor: pointer;
				z-index: 2;
			}

			.templateOverlay:hover{
				background-color: rgba(0,0,0,0);
			}

			.templateOverlay:hover > div{
				color: #565656;
			}

			.templateTitle{
				color: white; 
				position: absolute; 
				left: 50%; 
				top: 50%; 
				transform: translate(-50%, -50%);
				z-index: 1;
			}
			</style>
		');
		$page->setBodyAttribute('ng-app="myApp" ng-controller="global"');
		$page->loadPage("index");
		$page->Render();
	break;
	
	case "home":
		Page::Load("home");
	break;
	
	case "new":
		Page::Load("new");
	break;
	
	case "template":
		Page::Load("template");
	break;
	
	case "manage":
		Page::Load("manage");
	break;
	
	case "pages":
		Page::Load("pages");
	break;
}

