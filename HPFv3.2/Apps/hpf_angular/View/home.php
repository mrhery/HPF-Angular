
<div class="card">
	<div class="card-header">
		<?= APP_NAME ?>
	</div>
	
	<div class="card-body">
		<div class="row">
			<div class="col-md-6">
				<a href="#login" data-toggle="modal" class="btn btn-lg btn-block btn-primary">
					<?= T::x("Log Masuk") ?>
				</a>
			</div>
			
			<div class="col-md-6">
				<a href="#!new" class="btn btn-lg btn-block btn-success">
					<?= T::x("+ Applikasi Baru") ?>
				</a>
			</div>
		</div>
	</div>
</div>

<div class="modal" id="login">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title"><?= APP_NAME ?>: Login</h4>
				<button type="button" class="close" data-dismiss="modal">&times;</button>
			</div>
			
			<div class="modal-body">
				Email:
				<input type="email" class="form-control" ng-model="user.email" /><br />
				
				
				Password:
				<input type="password" class="form-control" ng-model="password" autofill="false" /><br />
				
				
				<button class="btn btn-block btn-success">
					Login
				</button>
			</div>
			
			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>