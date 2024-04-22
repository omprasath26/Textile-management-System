<?php include('db_connect.php');?>

<div class="container-fluid">
	
	<div class="col-lg-12">
		<div class="row">
			<!-- FORM Panel -->
			<div class="col-md-4">
			<form action="" id="manage-employee">
				<div class="card">
					<div class="card-header">
						    Employees Form
				  	</div>
					<div class="card-body">
							<input type="hidden" name="id">
							<div class="form-group">
								<label class="control-label">Name</label>
								<input type="text" class="form-control" name="name">
							</div>
							<div class="form-group">
								<label class="control-label">DOB</label>
								<input type="text" class="form-control form-control-sm text-right" name="price">
							</div>
							<div class="form-group">
								<label class="control-label">Salary</label>
								<input type="text" class="form-control form-control-sm text-right" name="price">
							</div>
							<div class="form-group">
								<label class="control-label">Role</label>
								<input type="text" class="form-control" name="name">
							</div>
							<div class="form-group">
								<label class="control-label">Date of joining</label>
								<input type="text" class="form-control form-control-sm text-right" name="price">
							</div>
							<div class="form-group">
								<label class="control-label">Years of experience</label>
								<input type="text" class="form-control form-control-sm text-right" name="price">
							</div>
							<div class="form-group">
								<label class="control-label">Address</label>
								<textarea name="address" id="address" cols="15" rows="2" class="form-control"></textarea>
							</div>
							<div class="form-group">
								<label class="control-label">Contact</label>
								<input type="text" class="form-control form-control-sm text-right" name="price">
							</div>
					</div>
							
					<div class="card-footer">
						<div class="row">
							<div class="col-md-12">
								<button class="btn btn-sm btn-primary col-sm-3 offset-md-3"> Save</button>
								<button class="btn btn-sm btn-default col-sm-3" type="button" onclick="$('#manage-employee').get(0).reset()"> Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</form>
			</div>
			<!-- FORM Panel -->

			<!-- Table Panel -->
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">
						<b>Employees List</b>
					</div>
					<div class="card-body">
						<table class="table table-bordered table-hover">
							<thead>
								<tr>
									<th class="text-center">#</th>
									<th class="text-center">Employees Info.</th>
									<th class="text-center">Action</th>
								</tr>
							</thead>
							<tbody>
								<?php 
								$i = 1;
								$employee = $conn->query("SELECT * FROM employee order by emp_id asc");
								while($row=$employee->fetch_assoc()):
								?>
								<tr>
									<td class="text-center"><?php echo $i++ ?></td>
									<td class="">
										<p>Name: <b><?php echo $row['name'] ?></b></p>
										<p><small>DOB: <b><?php echo $row['DOB'] ?></b></small></p>
										<p><small>salary: <b><?php echo $row['salary'] ?></b></small></p>
										<p><small>role: <b><?php echo $row['role'] ?></b></small></p>
										<p><small>date of joining: <b><?php echo $row['date of joining'] ?></b></small></p>
										<p><small>year of joining: <b><?php echo $row['yearofex'] ?></b></small></p>
										<p><small>address: <b><?php echo $row['address'] ?></b></small></p>
										<p><small>contact: <b><?php echo $row['contact'] ?></b></small></p>
									</td>
									<td class="text-center">
										<button class="btn btn-sm btn-danger delete_employee" type="button" data-emp_id="<?php echo $row['emp_id'] ?>">Delete</button>
									</td>
								</tr>
								<?php endwhile; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
			<!-- Table Panel -->
		</div>
	</div>	

</div>
<style>
	
	td{
		vertical-align: middle !important;
	}
	td p {
		margin:unset;
	}
</style>
<script>
	$('#manage-employee').on('reset',function(){
		$('input:hidden').val('')
	})
	
	$('#manage-employee').submit(function(e){
		e.preventDefault()
		start_load()
		$.ajax({
			url:'ajax.php?action=save_employee',
			data: new FormData($(this)[0]),
		    cache: false,
		    contentType: false,
		    processData: false,
		    method: 'POST',
		    type: 'POST',
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully added",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
				else if(resp==2){
					alert_toast("Data successfully updated",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	})
	$('.delete_employee').click(function(){
		_conf("Are you sure to delete this employee?","delete_employee",[$(this).attr('data-emp_id')])
	})
	function delete_employee($emp_id){
		start_load()
		$.ajax({
			url:'ajax.php?action=delete_employee',
			method:'POST',
			data:{emp_id:$emp_id},
			success:function(resp){
				if(resp==1){
					alert_toast("Data successfully deleted",'success')
					setTimeout(function(){
						location.reload()
					},1500)

				}
			}
		})
	}
	$('table').dataTable()
</script>