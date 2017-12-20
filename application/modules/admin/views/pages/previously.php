<div class="container-fluid content" >
	<div class="row" style="margin-top: 10px;">

		<div class="modal fade" id="add_program" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
			<div class="modal-dialog modal-lg" role="document">
				<div class="modal-content">
					<div class="modal-header" style="background: #212A39; border-radius: 5px 5px 0 0; color: white;">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close" style="color: white; border: none;"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Modal title</h4>
					</div>
					<div class="modal-body">
					...
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div>
			</div>
		</div>

		<div class="col-md-12" style="margin: 0; padding: 0;">
			
			<div style="width: calc(100% - 20px); background: white; padding: 10px; margin: 0 10px; text-align: right;">
				<span style="float: left; width: 30%; padding: 4px 10px; background: red; border-radius: 5px; background: #393738; color: white;">
					<i class="fa fa-search" style="float: left; padding: 5px 0; margin-right: 10px;"></i>
					<input type="text" name="" style="float: left; width: calc(100% - 23px); border: none; padding: 2px 0; outline: none; background: none; " placeholder="Search">	
				</span>
				

				<a class="btn btn-primary btn-sm" data-toggle="modal" data-target="#add_program">
					Sort By
				</a>
				<a class="btn btn-primary btn-sm" href="">
					Group By
				</a>
			</div>

		</div>

		
		<?php echo $page ?>

	</div>
</div>