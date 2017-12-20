<div class="row" style="background: white;">
			
	<div class="col-md-3 hidden-sm hidden-xs" style="margin: 0; padding: 0;" >
		
		<?php foreach ($program_kategori as $pkk => $pkv) { ?>
				

		<div style="width: 100%; float: left; background: url(<?php echo base_url('assets/img/side.svg') ?>) #737373 no-repeat; color:white; background-position: right 0 top;">
			<img src="<?php echo base_url('assets/thumbnail/' . $pkv->thumbnail) ?>" style="height: 60px; width: 60px; float: left;"  />
			<div style="width: calc(100% - 60px); float: left; padding: 0 10px;">
				<b style="margin:0; padding:0; font-size: 20px; width:100%; float: left;">
				<?php echo $pkv->kategori; ?>
				</b>
				<span style="margin:0; padding:0; float: left; width: calc(100% - 20px); ">
					<b style="float: left; margin-right: 10px;">
						<?php echo $pkv->hari; ?>
					</b>
					<span style="font-size: 12px;">
						<i class="flag-sm flag-sm-JP" style="float: left; margin-right: 5px;"></i> 
						<span style=" padding: 0.8px 0 0 1px; float: left; margin-right: 10px;">
							JST : <?php echo $pkv->program_start_jpn . ' - ' . $pkv->program_end_jpn; ?>
						</span>
						<i class="flag-sm flag-sm-ID" style="font-size: 10px; float: left; margin-right: 5px;"></i> 
						<span style=" padding: 0.8px 0 0 1px; float: left; margin-right: 10px;">
							WIB : <?php echo $pkv->program_start_ina . ' - ' . $pkv->program_end_ina; ?>
						</span>
					</span>
				</span>
			</div>
		</div>

		<?php } ?>

	</div>

	<div class="col-md-9 hidden-sm hidden-xs" style="background: #F9F2C8; padding: 10px; min-height: 880px;">

		<?php foreach ($close_program as $clsprk => $clsprv): ?>
			
			<div class="row" id="program_menu_<?php echo $clsprv['id_kategori'] ?>" style="padding: 0; margin: 0;">

				<div class="col-md-4">
					<img src="<?php echo base_url('assets/thumbnail/' . $clsprv['thumbnail']) ?>" style="width: 100%; float: left;" >	
				</div>

				<div class="col-md-8">
					<b style="width: 100%; float: left; font-size: 30px;">
						<?php echo $clsprv['program'][1]['judul'] ?>
					</b>
					<div style="width: 100%; float: left; margin-top: 5px;">
						<span style="width: 100%; float: left; font-size: 15px;">
							Senin, 11 Juli 2019
						</span>
						<span style="font-size: 12px; margin-top: 10px; float: left;">
							<i class="flag-sm flag-sm-JP" style="float: left; margin-right: 5px;"></i> 
							<span style=" padding: 0.8px 0 0 1px; float: left; margin-right: 10px;">
								JST : 20.00 - 21:00
							</span>
							<i class="flag-sm flag-sm-ID" style="font-size: 10px; float: left; margin-right: 5px;"></i> 
							<span style=" padding: 0.8px 0 0 1px; float: left; margin-right: 10px;">
								WIB : 19:00 - 20:00
							</span>
						</span>
					</div>
					<div style="width: 100%; float: left; margin-top: 10px;">
						<b style="font-size: 20px;">Penyiar : </b> <br>
						<span style="width: 100%; float: left; margin: 5px 0; font-size: 16px;">
							<img src="<?php echo base_url('assets/penyiar/photo.jpg') ?>" style="height: 30px; width: 30px; border-radius: 15px; margin-right: 10px;">Bassamtiano	
						</span>
						<span style="width: 100%; float: left; margin: 5px 0; font-size: 16px;">
							<img src="<?php echo base_url('assets/penyiar/photo.jpg') ?>" style="height: 30px; width: 30px; border-radius: 15px; margin-right: 10px;">Bassamtiano	
						</span>
					</div>

					<b style="margin-top:10px; border-bottom: solid black 1px; width: 100%; float: left;"><i class="fa fa-calendar" style="margin-right: 10px;"></i>Jadwal Siaran Selanjutnya</b>

					<div style="width: 100%; float: left;padding: 10px 0;">
						<img src="<?php echo base_url('assets/thumbnail/program.jpg') ?>" style="width: 80px; float: left;" >	
						<div style="width: calc(100% - 90px); float: left; padding: 0 5px;">
							<b>
								JUDUL SIARAN
							</b>
							<div style="width: 100%; float: left; margin-top: 5px;">
								<span style="width: 100%; float: left; ">
									Senin, 11 Juli 2019
								</span>
								<span style="font-size: 12px;float: left;">
									<i class="flag-sm flag-sm-JP" style="float: left; margin-right: 5px;"></i> 
									<span style=" padding: 0.8px 0 0 1px; float: left; margin-right: 10px;">
										JST : 20.00 - 21:00
									</span>
									<i class="flag-sm flag-sm-ID" style="font-size: 10px; float: left; margin-right: 5px;"></i> 
									<span style=" padding: 0.8px 0 0 1px; float: left; margin-right: 10px;">
										WIB : 19:00 - 20:00
									</span>
								</span>
							</div>
							<div style="float: left; width: 100%;">
								<b>Penyiar : </b>
								<img src="<?php echo base_url('assets/penyiar/photo.jpg') ?>" style="height: 14px; width: 14px; border-radius: 7px; margin-right: 5px;">Bassamtiano	
								<img src="<?php echo base_url('assets/penyiar/photo.jpg') ?>" style="height: 14px; width: 14px; border-radius: 7px; margin-right: 5px;">Bassamtiano	
								<img src="<?php echo base_url('assets/penyiar/photo.jpg') ?>" style="height: 14px; width: 14px; border-radius: 7px; margin-right: 5px;">Bassamtiano	
							</div>
						</div>
					</div>

					<div style="width: 100%; float: left;padding: 10px 0;">
						<img src="<?php echo base_url('assets/thumbnail/program.jpg') ?>" style="width: 80px; float: left;" >	
						<div style="width: calc(100% - 90px); float: left; padding: 0 5px;">
							<b>
								JUDUL SIARAN
							</b>
							<div style="width: 100%; float: left; margin-top: 5px;">
								<span style="width: 100%; float: left; ">
									Senin, 11 Juli 2019
								</span>
								<span style="font-size: 12px;float: left;">
									<i class="flag-sm flag-sm-JP" style="float: left; margin-right: 5px;"></i> 
									<span style=" padding: 0.8px 0 0 1px; float: left; margin-right: 10px;">
										JST : 20.00 - 21:00
									</span>
									<i class="flag-sm flag-sm-ID" style="font-size: 10px; float: left; margin-right: 5px;"></i> 
									<span style=" padding: 0.8px 0 0 1px; float: left; margin-right: 10px;">
										WIB : 19:00 - 20:00
									</span>
								</span>
							</div>
							<div style="float: left; width: 100%;">
								<b>Penyiar : </b>
								<img src="<?php echo base_url('assets/penyiar/photo.jpg') ?>" style="height: 14px; width: 14px; border-radius: 7px; margin-right: 5px;">Bassamtiano	
								<img src="<?php echo base_url('assets/penyiar/photo.jpg') ?>" style="height: 14px; width: 14px; border-radius: 7px; margin-right: 5px;">Bassamtiano	
								<img src="<?php echo base_url('assets/penyiar/photo.jpg') ?>" style="height: 14px; width: 14px; border-radius: 7px; margin-right: 5px;">Bassamtiano	
							</div>
						</div>
					</div>

					<div style="width: 100%; float: left;padding: 10px 0;">
						<img src="<?php echo base_url('assets/thumbnail/program.jpg') ?>" style="width: 80px; float: left;" >	
						<div style="width: calc(100% - 90px); float: left; padding: 0 5px;">
							<b>
								JUDUL SIARAN
							</b>
							<div style="width: 100%; float: left; margin-top: 5px;">
								<span style="width: 100%; float: left; ">
									Senin, 11 Juli 2019
								</span>
								<span style="font-size: 12px;float: left;">
									<i class="flag-sm flag-sm-JP" style="float: left; margin-right: 5px;"></i> 
									<span style=" padding: 0.8px 0 0 1px; float: left; margin-right: 10px;">
										JST : 20.00 - 21:00
									</span>
									<i class="flag-sm flag-sm-ID" style="font-size: 10px; float: left; margin-right: 5px;"></i> 
									<span style=" padding: 0.8px 0 0 1px; float: left; margin-right: 10px;">
										WIB : 19:00 - 20:00
									</span>
								</span>
							</div>
							<div style="float: left; width: 100%;">
								<b>Penyiar : </b>
								<img src="<?php echo base_url('assets/penyiar/photo.jpg') ?>" style="height: 14px; width: 14px; border-radius: 7px; margin-right: 5px;">Bassamtiano	
								<img src="<?php echo base_url('assets/penyiar/photo.jpg') ?>" style="height: 14px; width: 14px; border-radius: 7px; margin-right: 5px;">Bassamtiano	
								<img src="<?php echo base_url('assets/penyiar/photo.jpg') ?>" style="height: 14px; width: 14px; border-radius: 7px; margin-right: 5px;">Bassamtiano	
							</div>
						</div>
					</div>

				</div>

			</div>

		<?php endforeach ?>

		
	</div>

	<div class="col-sm-12 col-xs-12 hidden-md hidden-lg">
		
		<div style="width: 100%; text-align: center; padding: 10px 0; font-size: 20px;">
			<i class="fa fa-calendar" style="margin-right: 10px;"></i>SIARAN SELANJUTNYA
		</div>

		<div style="width: 100%; float: left;padding: 10px 0;">
			<img src="<?php echo base_url('assets/thumbnail/program.jpg') ?>" style="width: 80px; float: left;" >	
			<div style="width: calc(100% - 90px); float: left; padding: 0 5px;">
				<b>
					JUDUL SIARAN
				</b>
				<div style="width: 100%; float: left; margin-top: 5px;">
					<span style="width: 100%; float: left; ">
						Senin, 11 Juli 2019
					</span>
					<span style="font-size: 12px;float: left;">
						<i class="flag-sm flag-sm-JP" style="float: left; margin-right: 5px;"></i> 
						<span style=" padding: 0.8px 0 0 1px; float: left; margin-right: 10px;">
							JST : 20.00 - 21:00
						</span>
						<i class="flag-sm flag-sm-ID" style="font-size: 10px; float: left; margin-right: 5px;"></i> 
						<span style=" padding: 0.8px 0 0 1px; float: left; margin-right: 10px;">
							WIB : 19:00 - 20:00
						</span>
					</span>
				</div>
				<div style="float: left; width: 100%;">
					<b>Penyiar : </b>
					<img src="<?php echo base_url('assets/penyiar/photo.jpg') ?>" style="height: 14px; width: 14px; border-radius: 7px; margin-right: 5px;">Bassamtiano	
					<img src="<?php echo base_url('assets/penyiar/photo.jpg') ?>" style="height: 14px; width: 14px; border-radius: 7px; margin-right: 5px;">Bassamtiano	
					<img src="<?php echo base_url('assets/penyiar/photo.jpg') ?>" style="height: 14px; width: 14px; border-radius: 7px; margin-right: 5px;">Bassamtiano	
				</div>
			</div>
		</div>

		<div style="width: 100%; float: left;padding: 10px 0;">
			<img src="<?php echo base_url('assets/thumbnail/program.jpg') ?>" style="width: 80px; float: left;" >	
			<div style="width: calc(100% - 90px); float: left; padding: 0 5px;">
				<b>
					JUDUL SIARAN
				</b>
				<div style="width: 100%; float: left; margin-top: 5px;">
					<span style="width: 100%; float: left; ">
						Senin, 11 Juli 2019
					</span>
					<span style="font-size: 12px;float: left;">
						<i class="flag-sm flag-sm-JP" style="float: left; margin-right: 5px;"></i> 
						<span style=" padding: 0.8px 0 0 1px; float: left; margin-right: 10px;">
							JST : 20.00 - 21:00
						</span>
						<i class="flag-sm flag-sm-ID" style="font-size: 10px; float: left; margin-right: 5px;"></i> 
						<span style=" padding: 0.8px 0 0 1px; float: left; margin-right: 10px;">
							WIB : 19:00 - 20:00
						</span>
					</span>
				</div>
				<div style="float: left; width: 100%;">
					<b>Penyiar : </b>
					<img src="<?php echo base_url('assets/penyiar/photo.jpg') ?>" style="height: 14px; width: 14px; border-radius: 7px; margin-right: 5px;">Bassamtiano	
					<img src="<?php echo base_url('assets/penyiar/photo.jpg') ?>" style="height: 14px; width: 14px; border-radius: 7px; margin-right: 5px;">Bassamtiano	
					<img src="<?php echo base_url('assets/penyiar/photo.jpg') ?>" style="height: 14px; width: 14px; border-radius: 7px; margin-right: 5px;">Bassamtiano	
				</div>
			</div>
		</div>

		<div style="width: 100%; float: left;padding: 10px 0;">
			<img src="<?php echo base_url('assets/thumbnail/program.jpg') ?>" style="width: 80px; float: left;" >	
			<div style="width: calc(100% - 90px); float: left; padding: 0 5px;">
				<b>
					JUDUL SIARAN
				</b>
				<div style="width: 100%; float: left; margin-top: 5px;">
					<span style="width: 100%; float: left; ">
						Senin, 11 Juli 2019
					</span>
					<span style="font-size: 12px;float: left;">
						<i class="flag-sm flag-sm-JP" style="float: left; margin-right: 5px;"></i> 
						<span style=" padding: 0.8px 0 0 1px; float: left; margin-right: 10px;">
							JST : 20.00 - 21:00
						</span>
						<i class="flag-sm flag-sm-ID" style="font-size: 10px; float: left; margin-right: 5px;"></i> 
						<span style=" padding: 0.8px 0 0 1px; float: left; margin-right: 10px;">
							WIB : 19:00 - 20:00
						</span>
					</span>
				</div>
				<div style="float: left; width: 100%;">
					<b>Penyiar : </b>
					<img src="<?php echo base_url('assets/penyiar/photo.jpg') ?>" style="height: 14px; width: 14px; border-radius: 7px; margin-right: 5px;">Bassamtiano	
					<img src="<?php echo base_url('assets/penyiar/photo.jpg') ?>" style="height: 14px; width: 14px; border-radius: 7px; margin-right: 5px;">Bassamtiano	
					<img src="<?php echo base_url('assets/penyiar/photo.jpg') ?>" style="height: 14px; width: 14px; border-radius: 7px; margin-right: 5px;">Bassamtiano	
				</div>
			</div>
		</div>

	</div>

</div>