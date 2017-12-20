
<script type="text/javascript">

	$('.radio-bottom-player').hide();

	var checkScroll = function() {
	if ($('.main-radio-player')[0]) {
		var el = $('.main-radio-player');
		var top_of_object = el.offset().top;
		var bottom_of_object = el.offset().top + el.outerHeight();
		var top_of_window = $(window).scrollTop();
		var bottom_of_window = $(window).scrollTop() + $(window).height();

		if (top_of_window > bottom_of_object ) {
			$('.radio-bottom-player').slideDown();
		} else {
			$('.radio-bottom-player').slideUp();  
		}
		}
	}

	$(window).on('scroll', function() {checkScroll()});
</script>


<div class="container-fluid radio-bottom-player" style="position: fixed; background: #21374B; bottom: 0; width: 100%; color: white;">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<?php if (!empty($radio[0])): ?>
				<div style="height: 50px; width: 50px; background: url(<?php echo base_url('assets/thumbnail/' . $radio[0]['thumbnail']) ?>) no-repeat; background-size: cover; margin: 5px 0; cursor: pointer; float: left; border-radius: 4px;">
			<?php else: ?>
				<div style="height: 50px; width: 50px; background: white no-repeat; background-size: cover; margin: 5px 0; cursor: pointer; float: left; border-radius: 4px;">
			<?php endif; ?>	

			
				<!-- <div style="width: 100%; height: 100%; background: rgba(0, 0, 0, 0.4); border-radius: 4px;">
					<i class="fa fa-play" style="color:white; font-size: 20px; margin: 15px;" ></i>
				</div> -->
				<div style="width: 100%; height: 100%; background: rgba(0, 0, 0, 0.4); border-radius: 4px;">
					<i class="fa fa-pause" style="color:white; font-size: 20px; margin: 15px;" ></i>
				</div>
			</div>

			<div style="margin: 5px 5px 5px 15px; float: left; width: calc(100% - 80px);">
				<div style="width: 60%; float: left;">
					<span style="float:left; font-size: 22px; width: 100%;">
						<b>
							<?php if(!empty($radio)) echo $radio[0]['judul']; else echo 'There is no Program Today'?>
						</b>
					</span>
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
				<div style="float: right; width: 40%;">
					<span style="float: right;">
						Penyiar : 
						<?php if (!empty($radio[0])): ?>
							<?php foreach ($radio[0]['penyiar'] as $penk => $penv) {
								echo $penv->name . ', ';
							} ?>
						<?php endif; ?>
					</span>
					<span style="float: right; clear: both;">
						Narasumber : A
					</span>	
				</div>
			</div>

		</div>
	</div>

</div>