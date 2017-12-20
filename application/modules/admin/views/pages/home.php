<div class="container-fluid">

	<div class="row">
		<div class="col-md-10 col-md-offset-1" style="margin-top: 10px;">
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
	</div>

	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			TWITTER
		</div>
	</div>

	<div class="row">
		
		<div class="col-md-5 col-md-offset-1" style="padding: 10px;">
			<div style="background: green;">
				Private Message
			</div>
			<div style="background: white; padding: 10px;">
				A
			</div>
		</div>
		<div class="col-md-5" style="padding: 10px;">
			<div style="background: green;">
				Broadcast Message
			</div>
			<div style="background: white; padding: 10px;">
				B
			</div>
		</div>

	</div>

</div>