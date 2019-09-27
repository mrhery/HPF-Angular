

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col-md-8">
				<a href="#!template" class="btn btn-sm btn-primary">
					<?= T::x("Balik") ?>
				</a>
				
				<?= T::x("Urus Aplikasi - Jenis: ") ?> {{napp.type}}
			</div>
			
			<div class="col-md-4 text-right">
				<button href="" class="btn btn-sm btn-danger" ng-click="cancelApp()">
					&cross; <?= T::x("Batal") ?>
				</button>
			</div>
		</div>
	</div>
	
	<div class="card-body">
		<div ng-switch on="napp.type">
			<div ng-switch-when="single">
				single
			</div>
			
			<div ng-switch-when="singleNoActionBar">
				single
			</div>
			
			<div ng-switch-default>
				<ul class="nav nav-tabs">
					<li class="nav-item">
						<button class="nav-link active" data-toggle="tab" href="#allPage"><?= T::x("Semua Paparan") ?></button>
					</li>
					<li class="nav-item">
						<button class="nav-link" data-toggle="tab" href="#leftDrawer"><?= T::x("Menu Laci Kiri") ?></button>
					</li>
				</ul>
				
				<div class="tab-content">
					<div class="tab-pane container active" id="allPage" style="padding-top: 20px;">
						<div class="row">
							<div class="col-md-3 templatecol">
								<div class="templateOverlay" data-toggle="modal" data-target="#addPage">
									<div class="text-center templateTitle">
										<?= T::x("Tambah Paparan") ?>
									</div>
								</div>
								
								<img src="<?= PORTAL ?>assets/images/templates/addPage.png" class="img img-fluid"/>
							</div>
							
							<div class="col-md-3 templatecol" ng-repeat="x in napp.pages">
								<div class="templateOverlay">
									<div class="text-center templateTitle">
										{{x.title}}
									</div>
								</div>
								
								<img src="<?= PORTAL ?>assets/images/templates/{{x.type}}.png" class="img img-fluid"/>
							</div>
						</div>
					</div>
					
					<div class="tab-pane container fade" id="leftDrawer">
						
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="addPage">
	<div class="modal-dialog modal-md">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">+ <?= T::x("Tambah Paparan") ?><?= APP_NAME ?></h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			
			<div class="modal-body">
				<div class="row">
					<div class="col-md-12">
						<?= T::x("Tajuk") ?>:
						<input type="text" class="form-control" placeholder="<?= T::x("Tajuk Paparan") ?>" /><br />
						
						<?= T::x("Jenis Paparan") ?>:
						<select class="form-control">
							<option ng-repeat="x in pageTemplates" value="{{x.code}}">{{x.name}}</option>
						</select>
					</div>
				</div>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>




















