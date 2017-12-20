<div class="container-fluid header" >
	<div class="row header-title" >
		<div class="col-md-5 col-md-offset-1 " >
			<img class="logo" src="<?php echo base_url('assets/img/logo_ppij_radio.png') ?>" ><b class="logo-title">PPIJ Radio</b>
		</div>
		<div class="col-md-5 hidden-sm hidden-xs">
			<div class="u-logedin" style>
				<img src="<?php echo base_url('assets/penyiar/photo.jpg') ?>"> 
				<span class="name">
					<i class="fa fa-angle-down" style="margin-right: 10px;"></i>
					Bassamtiano
				</span>

				<!-- <div style="position: absolute; background: red; height: 100px; width: 50%; top: 32px; right: 0; z-index: 2;">
					
				</div> -->
			</div>
			<div class="u-onair">
				<span class="judul-siaran">
					<img src="<?php echo base_url('assets/thumbnail/program.jpg') ?>" style="width: 30px;">
					<b style="font-size: 20px;">JUDUL SIARAN</b>	
				</span>
				
				<span class="status-siaran">
					SET ON AIR <i class="fa fa-toggle-off" style="color:red;"></i>
				</span>
			</div>
			
		</div>
	</div>

	<div class="row" >
		<div class="col-lg-12 col-md-12 hidden-sm hidden-xs" style="padding: 0;">
			<div class="header-menu">
				<a href="<?php echo base_url('index.php/admin') ?>" class="header-menu-item <?php if($active == 'main') echo 'active';  ?>" >
					<i class="fa fa-home" style="margin-right: 10px;"></i>Main Page
				</a>
				<a href="<?php echo base_url('index.php/admin/program') ?>" class="header-menu-item <?php if($active == 'program') echo 'active';  ?>">
					<i class="fa fa-music" style="margin-right: 10px;"></i>Program
				</a>
				<a href="<?php echo base_url('index.php/admin/previously') ?>" class="header-menu-item <?php if($active == 'previously') echo 'active';  ?>">
					<i class="fa fa-podcast" style="margin-right: 10px;"></i>Previously
				</a>
				<a href="<?php echo base_url('index.php/admin/kontak') ?>" class="header-menu-item <?php if($active == 'kontak') echo 'active';  ?>">
					<i class="fa fa-comments" style="margin-right: 10px;"></i>Kontak
				</a>
				<a href="<?php echo base_url('index.php/admin/penyiar') ?>" class="header-menu-item <?php if($active == 'penyiar') echo 'active';  ?>">
					<i class="fa fa-users" style="margin-right: 10px;"></i>Penyiar
				</a>
				<a href="<?php echo base_url('index.php/admin/galery') ?>" class="header-menu-item <?php if($active == 'galery') echo 'active';  ?>">
					<i class="fa fa-image" style="margin-right: 10px;"></i>Galery
				</a>
			</div>
		</div>
	</div>
	<!-- <div class="row" style="background: #212A39">
		<div class="col-md-10 col-md-offset-1" style="padding: 0;">
			<div class="header-submenu">
				<?php foreach ($menu as $mkey => $mvalue) { ?>
					<a href="<?php echo base_url('index.php/admin/') . $mvalue['url'] ?>" class="header-submenu-item 
						<?php if($mvalue['status'] == 1) echo 'active'; ?>"
						>
						<?php echo $mkey ?>
					</a>
				<? } ?>
			</div>
		</div>
	</div> -->
</div>