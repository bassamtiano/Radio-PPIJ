
<div class="container-fluid " >

	<div class="row">

			<!-- Ratio 2 : 1 -->

			<div class="col-lg-12 col-md-12 hidden-sm hidden-xs" style="padding: 0;">
				<div style="width: 100%; float: left; padding-bottom: 50%; height: 50%; background: url(http://localhost/radio/assets/img/test.jpg) center center; background-size: cover; " >	</div>
			</div>
			
			<!-- Ratio 4 : 3 -->
			<div class="col-sm-12 hidden-xs hidden-lg hidden-md" style="padding: 0;">
				 <div style="width: 100%; float: left; padding-bottom: 75%; height: 75%; background: url(http://localhost/radio/assets/img/test.jpg) center center; background-size: cover; " >	</div>
			</div>

			<div class="col-xs-12 hidden-lg hidden-md hidden-sm" style="padding: 0;">
				<div style="background: url(<?php echo base_url('assets/thumbnail/' . $radio[0]['thumbnail']) ?>) no-repeat; position: relative; background-size: cover; padding-top: 100%; width: 100%; float: left; overflow: hidden;">
					<div style="height: 100%; width: 100%;background: rgba(0, 0, 0, 0.8); position: absolute; top:0;">
						<i class="fa fa-play" style="font-size: 30px; width: 100%; text-align: center; margin-top: calc(50% - 15px);"></i>
					</div>
				</div>
			</div>

	</div>

	

	<div class="row" style="color: white;">

		<div class="col-md-10 col-md-offset-1 hidden-sm hidden-xs main-radio-player" style="position: absolute; padding: 10px; margin-top: -95px; background: #212226; border-radius: 4px;" >

			<div style="background: url(<?php echo base_url('assets/thumbnail/' . $radio[0]['thumbnail']) ?>) no-repeat; position: relative; background-size: cover; padding-top: 170px; width: 170px;float: left; overflow: hidden;">
				<div style="height: 170px; width: 170px;background: rgba(0, 0, 0, 0.8); position: absolute; top:0;">
					<i class="fa fa-play" style="font-size: 30px; width: 100%; text-align: center; margin-top: calc(50% - 15px);"></i>
				</div>
			</div>

			<div style="float: left; width: calc(100% - 200px); margin-left: 20px; ">
						
				<div style="width: 100%; float: left;">
					<b style="float: left; font-size: 25px">
						<?php if(!empty($radio)) echo $radio[0]['judul']; else echo 'There is no Program Today'?>
					</b>
					<div style="margin-left: 10px;background: red; float: left; padding: 5px 10px; font-size: 15px; border-radius: 20px;">
						<i class="fa fa-microphone"></i> ON AIR
					</div>
				</div>
				<div style="width: 100%; float: left; margin-top: 10px;">
					<span style="font-size: 12px;">
						<?php if (!empty($radio[0])): ?>
							
							<i class="flag-sm flag-sm-JP" style="float: left; margin-right: 5px;"></i> 
							<span style=" padding: 0.8px 0 0 1px; float: left; margin-right: 10px;">
								JST : <?php echo $radio[0]['waktu_start_jpn']  ?> - <?php echo $radio[0]['waktu_end_jpn']  ?>
							</span>
							<i class="flag-sm flag-sm-ID" style="font-size: 10px; float: left; margin-right: 5px;"></i> 
							<span style=" padding: 0.8px 0 0 1px; float: left; margin-right: 10px;">
								WIB : <?php echo $radio[0]['waktu_start_ina']  ?> - <?php echo $radio[0]['waktu_end_ina']  ?>
							</span>

						<?php elseif (!empty($radio[0])):?>

							<i class="flag-sm flag-sm-JP" style="float: left; margin-right: 5px;"></i> 
							<span style=" padding: 0.8px 0 0 1px; float: left; margin-right: 10px;">
								JST : --.-- - --.--
							</span>
							<i class="flag-sm flag-sm-ID" style="font-size: 10px; float: left; margin-right: 5px;"></i> 
							<span style=" padding: 0.8px 0 0 1px; float: left; margin-right: 10px;">
								WIB : --.-- - --.--
							</span>

						<?php endif ?>
					</span>
				</div>
				<div style="width: 100%; float: left; margin-top: 10px;">
					<b style="font-size: 15px;">Penyiar : </b> <br>

					<?php if (!empty($radio[0])): ?>

						<?php foreach ($radio[0]['penyiar'] as $penk => $penv): ?>
							<span style="width: 100%; float: left; margin: 5px 0; font-size: 14px;">
								<img src="<?php echo base_url('assets/penyiar/' . $penv->photo ) ?>" style="height: 30px; width: 30px; border-radius: 15px; margin-right: 10px;"> <?php echo $penv->name ?>
							</span>	
						<?php endforeach ?>

					<?php endif ?>
					
				</div>

			</div>

		</div>

		<div class="col-sm-12 hidden-xs hidden-lg hidden-md" style="padding: 10px; margin-top: -95px; background: #212226;" >

			<div style="background: url(<?php echo base_url('assets/thumbnail/' . $radio[0]['thumbnail']) ?>) no-repeat; position: relative; background-size: cover; padding-top: 170px; width: 170px;float: left; overflow: hidden;">
				<div style="height: 170px; width: 170px;background: rgba(0, 0, 0, 0.8); position: absolute; top:0;">
					<i class="fa fa-play" style="font-size: 30px; width: 100%; text-align: center; margin-top: calc(50% - 15px);"></i>
				</div>
			</div>

			<div style="float: left; width: calc(100% - 200px); margin-left: 20px; ">
						
				<div style="width: 100%; float: left;">
					<b style="float: left; font-size: 25px">
						<?php if(!empty($radio)) echo $radio[0]['judul']; else echo 'There is no Program Today'?>
					</b>
					<div style="margin-left: 10px;background: red; float: left; padding: 5px 10px; font-size: 15px; border-radius: 20px;">
						<i class="fa fa-microphone"></i> ON AIR
					</div>
				</div>
				<div style="width: 100%; float: left; margin-top: 10px;">
					<span style="font-size: 12px;">
						<?php if (!empty($radio[0])): ?>
							
							<i class="flag-sm flag-sm-JP" style="float: left; margin-right: 5px;"></i> 
							<span style=" padding: 0.8px 0 0 1px; float: left; margin-right: 10px;">
								JST : <?php echo $radio[0]['waktu_start_jpn']  ?> - <?php echo $radio[0]['waktu_end_jpn']  ?>
							</span>
							<i class="flag-sm flag-sm-ID" style="font-size: 10px; float: left; margin-right: 5px;"></i> 
							<span style=" padding: 0.8px 0 0 1px; float: left; margin-right: 10px;">
								WIB : <?php echo $radio[0]['waktu_start_ina']  ?> - <?php echo $radio[0]['waktu_end_ina']  ?>
							</span>

						<?php elseif (!empty($radio[0])):?>

							<i class="flag-sm flag-sm-JP" style="float: left; margin-right: 5px;"></i> 
							<span style=" padding: 0.8px 0 0 1px; float: left; margin-right: 10px;">
								JST : --.-- - --.--
							</span>
							<i class="flag-sm flag-sm-ID" style="font-size: 10px; float: left; margin-right: 5px;"></i> 
							<span style=" padding: 0.8px 0 0 1px; float: left; margin-right: 10px;">
								WIB : --.-- - --.--
							</span>

						<?php endif ?>
					</span>
				</div>
				<div style="width: 100%; float: left; margin-top: 10px;">
					<b style="font-size: 15px;">Penyiar : </b> <br>

					<?php if (!empty($radio[0])): ?>

						<?php foreach ($radio[0]['penyiar'] as $penk => $penv): ?>
							<span style="width: 100%; float: left; margin: 5px 0; font-size: 14px;">
								<img src="<?php echo base_url('assets/penyiar/' . $penv->photo ) ?>" style="height: 30px; width: 30px; border-radius: 15px; margin-right: 10px;"> <?php echo $penv->name ?>
							</span>	
						<?php endforeach ?>

					<?php endif ?>
					
				</div>

			</div>

		</div>

		<div class="col-xs-12 hidden-lg hidden-md hidden-sm" style="padding: 10px;">
			<b style="font-size: 15px;">Oleh : </b> <br>

			<?php if (!empty($radio[0])): ?>

				<?php foreach ($radio[0]['penyiar'] as $penk => $penv): ?>
					<span style="width: 100%; float: left; margin: 5px 0; font-size: 14px;">
						<img src="<?php echo base_url('assets/penyiar/' . $penv->photo ) ?>" style="height: 30px; width: 30px; border-radius: 15px; margin-right: 10px;"> <?php echo $penv->name ?>
					</span>	
				<?php endforeach ?>

			<?php endif ?>

		</div>
		
		
	</div>


</div>
