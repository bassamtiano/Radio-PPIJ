
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
			<div style="height: 50px; width: 50px; background: url(<?php echo base_url('assets/thumbnail/program-1.jpg') ?>) no-repeat; background-size: cover; margin: 5px 0; cursor: pointer; float: left; border-radius: 4px;">
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
							NAMA PROGRAM
						</b>
					</span>
					<span style="font-size: 12px;">
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
				<div style="float: right; width: 40%;">
					<span style="float: right;">
						Penyiar : A, B, C
					</span>
					<span style="float: right; clear: both;">
						Narasumber : A
					</span>	
				</div>
			</div>

		</div>
	</div>

</div>