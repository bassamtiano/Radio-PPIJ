
<div class="col-md-12" style="margin: 10px 0 0 0; padding: 0;">

	<?php foreach ($data as $dkey => $dvalue) { ?>
			
	<div style="width: calc(14.28% - 20px); margin: 0 10px; float:left; -webkit-box-shadow: 0.5px 0.5px 1px 0px rgba(0,0,0,0.3); -moz-box-shadow: 0.5px 0.5px 1px 0px rgba(0,0,0,0.3); box-shadow: 0.5px 0.5px 1px 0px rgba(0,0,0,0.3);">

		<?php if ($dvalue['status'] == 2): ?>

			<div style="background: #E80C7A; color: white; width: 100%; padding: 5px; text-align: center;">
				<i class="fa fa-times-circle" style="margin-right: 10px;"></i>Not Yet Publish
			</div>

		<?php else: ?>

			<div style="background: #428C5C; color: white; width: 100%; padding: 5px; text-align: center;">
				<i class="fa fa-check-circle" style="margin-right: 10px;"></i>Published
			</div>

		<?php endif ?>

		<div style="background: #212A39; color: white; width: 100%; padding: 5px; text-align: center;">
			<?php echo date_format(date_create($dvalue['created_at']),"l, d F Y") ?>
		</div>
		<div style="width: 100%; padding-bottom: 100%; background: url(<?php echo base_url('assets/thumbnail/' . $dvalue['thumbnail']) ?>) no-repeat; background-size: cover;">
			
		</div>
		<div style="width: 100%; padding: 5px; background: #428C5C; text-align: center; color: white;">
			<?php echo $dvalue['kategori'] ?>
		</div>
		<div style="width: 100%; padding: 5px 10px; height: 100px; background: white; overflow: auto;">

			<?php foreach ($dvalue['penyiar'] as $pk => $pv): ?>			

				<span style="width: 100%; float: left; margin: 5px 0;">
					<img src="<?php echo base_url('assets/penyiar/' . $pv->photo ) ?>" style="height: 30px; width: 30px; border-radius: 15px; margin-right: 10px;">
					<?php echo $pv->name ?>	
				</span>

			<?php endforeach ?>

		</div>
	</div>

	<?php } ?>

</div>
