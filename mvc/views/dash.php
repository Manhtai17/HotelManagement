

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title></title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<style type="text/css" >
		*{
			padding: 0;
			margin: 0;border: 0;
		}
		html,body{
			width: 100%;
			height: 100%;
		}
		.chung{
			padding: 0;
			margin: 0;border: 0;
		}
		
		.sidebar{
			width: 100%;
			height: 100vh;
			background-color: #0973b9;
			/*position: fixed;*/

			float: left ;
		}
		nav{
			width: 100%;
			float: left;
		}
		nav ul{
			display: flex;
			flex-direction: column;

		}
		nav ul li{
			list-style: none;
			width: 100%;
			text-align: center;
			height: 40px;
			border-bottom:1px solid #016087;
			border-top:1px solid #0382c1;
			list-style: none;
		}
		nav ul li a{
			color: #fff;
			text-decoration: none;
		}
		nav ul li:hover{
			color: blue;
		}
		.content{
			width: 100%;
			float: left;
			height: 100vh;
		}
		.header{
			width: 100%;
			height: 75px;
			background-color: #0973b9;
			position: fixed;
		}
		.main{
			width: 100%;
			height: 1000px;
			background-color:white;
			position: absolute;
			top: 80px;
		}

		.box-title{
			border-radius: 5px;
			box-shadow: 0px 0px 3px 1px gray;
			padding: 10px 0px;
		}
		.error-msg{
			color: #dc3545;
			font-weight: 600;
		}
		.success-msg{
			color: green;
			font-weight: 600;
		}
		.header p,a{
			color: white;
		}
		.header div{
			margin:0 8px;
		}
	</style>
</head>
<body>

	
	
	<div class="container-fluid chung">
		<div  class="col-lg-2 sidebar chung">
			<div class="logo" style="text-align: center;font-size: 2em;color:#fff;border-bottom:1px solid #016087;border-top:1px solid
			#0382c1; height: 75px;border-right:1px solid #016087">
			My hote
		</div>
		<nav>
			<ul>
				<li><a href="" title="">Rooms</a></li>
				<li><a href="" title="">Employees</a></li>
				<li><a href="" title="">Reports</a></li>
			</ul>
		</nav>
	</div>

	<div class=" col-lg-10  content chung">
		<div class="header" style="display: flex;flex-direction:row">
			<div>
				<p>Hi, Admin</p>
			</div>
			<div>
				<i style='font-size:30px;color: white;' class='fas'>&#xf406;</i>
			</div>
			<div>
				<?php 

			if(isset($_SESSION['username'])){
				?>
				<p><a  href="<?php echo './logout' ;?>" tabindex="-1" aria-disabled="true"><?php echo "Logout";  ?></a></p>
				
				<?php

			}

			 ?>
			</div>
			
			
		</div>
		<div class="main">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 margin-tb">					
						<div class="pull-left">
							<h2>Welcome</h2>
						</div>
						<div class="pull-right">
							<button type="button" class="btn btn-success" data-toggle="modal" data-target="#create-item">
								Create Item
							</button>
						</div>
					</div>
				</div>


				<table class="table table-bordered" style="vertical-align: left; text-align: left;">
					<thead class="thead-bordered">
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>Email</th>
							<th>Phone</th>
							<th>Active</th>
							<th width="200px">Action</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						$data = $data["data"];
						if($data){ foreach($data as $row){ 
							?>
							<tr>

								<td><?php echo $row['EmployeeID']; ?></td>
								<td><?php echo $row['Name']; ?></td>
								<td><?php echo $row['Email']; ?></td>
								<td><?php echo $row['Phone']; ?></td>
								<td><?php echo $row['Position']; ?></td>
								<td>
									<button type="button" class="btn btn-danger editdata" id= "<?php echo $row['EmployeeID']; ?>" name="<?php echo $row['EmployeeID']; ?>" data-toggle="modal"  value="<?php echo $row['EmployeeID']; ?>">Update</button>
									<button type="submit" class="btn btn-danger deletedata" id="btndel" name="<?php echo $row['EmployeeID']; ?>"><a href="../Admin/Delete/<?php echo $row['EmployeeID']; ?>">Delete</a></button>
								</td>
							</tr>
						<?php }}else{ echo "<tr><td colspan='7'><h2>No Result Found</h2></td></tr>"; } ?>
					</tbody>
				</table>	


				<ul id="pagination" class="pagination-sm"></ul>


				<!-- Create Item Modal -->
				<div class="modal fade" id="create-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header" style="display: block;">
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
								<h4 class="modal-title" id="myModalLabel">Create Item</h4>
							</div>


							<div class="modal-body">
								<form data-toggle="validator" method="POST" action="../Admin/Add">


									<div class="form-group">
										<label class="control-label" for="name">Name:</label>
										<input type="text" name="name" class="form-control" data-error="Please enter name." required />
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group">
										<label class="control-label" for="email">Email:</label>
										<input type="email" name="email" class="form-control" data-error="Please enter email." placeholder="a@gmail.com" required />
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group">
										<label class="control-label" for="phone">Phone:</label>
										<input type="tel" name="phone" class="form-control" data-error="Please enter phone." pattern="[0-9]{10}" placeholder="09123456xx"  required />
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group">
										<label class="control-label" for="position">Position:</label>
										<input type="textarea" name="position" class="form-control" data-error="Please enter position." placeholder="emp, ceo, ..." required />
										<div class="help-block with-errors"></div>
									</div>


									<div class="form-group">
										<button type="submit" class="btn crud-submit-add btn-success" name="crud-submit-add">Add</button>
									</div>


								</form>


							</div>
						</div>


					</div>
				</div>


				<!-- Edit Item Modal -->
				<div class="modal fade" id="edit-item" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header" style="display: block;" >
								<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
								<h4 class="modal-title" id="myModalLabel">Edit Item</h4>
							</div>


							<div class="modal-body">
								<form data-toggle="validator" action-data="" method="POST" action="../Admin/Edit">
									<input type="text" name="id" class="edit-id">


									<div class="form-group">
										<label class="control-label" for="name">Name:</label>
										<input type="text" name="name" class="form-control" data-error="Please enter name." required id="nameedit" />
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group">
										<label class="control-label" for="email">Email:</label>
										<input type="email" name="email" class="form-control" data-error="Please enter email." placeholder="a@gmail.com" required id="emailedit" />
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group">
										<label class="control-label" for="phone">Phone:</label>
										<input type="tel" name="phone" class="form-control" data-error="Please enter phone." pattern="[0-9]{10}" placeholder="09123456xx"  required id="phoneedit" />
										<div class="help-block with-errors"></div>
									</div>
									<div class="form-group">
										<label class="control-label" for="position">Position:</label>
										<input type="textarea" name="position" class="form-control" data-error="Please enter position." placeholder="emp, ceo, ..." required  id="positionedit"/>
										<div class="help-block with-errors"></div>
									</div>



									<div class="form-group">
										<button type="submit" class="btn btn-success crud-submit-edit" name="crud-submit-edit"><a href="../Admin/Edit/3">Update</a></button>
									</div>


								</form>


							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" type="text/javascript"></script>
<script>
	$(document).ready(function () {
		function a(){
			//alert($('.edit-id').val($(this).parent().prev().prev().prev().prev().val()));
			console.log("hello");
			alert($(this).attr("value"));
		});
	});
</script>
</body>
</html>