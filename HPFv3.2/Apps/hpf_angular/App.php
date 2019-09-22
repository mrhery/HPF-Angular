<?php
//A journey start with a step


switch(url::get(0)){
	case "":
	case "index":
		$page = new Page();
		$page->addTopTag('
			<meta charset="utf-8" />
			<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
			<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular-route.js"></script>
		');
		$page->setBodyAttribute('ng-app="myApp"');
		$page->loadPage("index");
		$page->Render();
	break;
	
	case "home":
		Page::Load("home");
	break;
	
	case "red":
		Page::Load("red");
	break;
	
	case "green":
		Page::Load("green");
	break;
	
	case "blue":
		Page::Load("blue");
	break;
}

