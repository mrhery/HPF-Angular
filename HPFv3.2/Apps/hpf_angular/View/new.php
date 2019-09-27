

<div class="card">
	<div class="card-header">
		<div class="row">
			<div class="col-md-8">
				<a href="#!" class="btn btn-sm btn-primary">
					<?= T::x("Balik") ?>
				</a>
				
				<?= T::x("Cipta Applikasi Baru") ?>
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
			<div class="col-md-6">
				<h5><u><?= T::x("Maklumat Asas: ") ?></u></h5>
				
				<?= T::x("Nama Aplikasi") ?>:
				<input type="text" ng-model="app_name" class="form-control" placeholder="<?= T::x("Nama Aplikasi") ?>" /><br />
				
				<?= T::x("Tentang Aplikasi") ?>:
				<textarea class="form-control" ng-model="app_about" placeholder="<?= T::x("Ringkasan tentang aplikasi") ?>"></textarea>
			</div>
			
			<div class="col-md-6">
				<h5><u><?= T::x("Logo: ") ?></u></h5>
				
				<input type="file" accept="image/*" />
			</div>
			
			<div class="col-md-12 text-right">
				<button href="#!template" ng-click="validateBasicInfo()" class="btn btn-primary">
					<?= T::x("Pilih Pencontoh Aplikasi") ?>
				</button>
			</div>
		</div>
	</div>
</div>

<script>

</script>