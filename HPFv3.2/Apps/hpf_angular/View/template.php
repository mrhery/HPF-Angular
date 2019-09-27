



<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col-md-8">
				<a href="#!new" class="btn btn-sm btn-primary">
					<?= T::x("Balik") ?>
				</a>
				
				<?= T::x("Pilih Pencontoh Aplikasi") ?>
			</div>
			
			<div class="col-md-4 text-right">
				<button href="" class="btn btn-sm btn-danger" ng-click="cancelApp()">
					&cross; <?= T::x("Batal") ?>
				</button>
			</div>
		</div>
	</div>
	
	<div class="card-body">
		<div class="row">
			<div class="col-md-3 templatecol" ng-repeat="x in appTemplates">
				<div class="templateOverlay" ng-click="pickTemplate(x.code)">
					<div class="text-center templateTitle">
						{{x.name}}
					</div>
				</div>
				
				<img src="{{x.image}}" class="img img-fluid"/>
			</div>
		</div>
	</div>
</div>
