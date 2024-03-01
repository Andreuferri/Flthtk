<?php 
include 'init.php'; 
if(!$users->isLoggedIn()) {
	header("Location: login.php");	
}
include('inc/header.php');
$user = $users->getUserInfo();
?>
<title>Build Helpdesk System with PHP & MySQL</title>
<script src="js/jquery.dataTables.min.js"></script>
<script src="js/dataTables.bootstrap.min.js"></script>		
<link rel="stylesheet" href="css/dataTables.bootstrap.min.css" />
<script src="js/general.js"></script>
<script src="js/user.js"></script>
<link rel="stylesheet" href="css/style.css" />
<?php include('inc/container.php');?>
<div class="container">	
	<div class="row home-sections">
	<img src="img/logo.png" alt="10">	
	<?php include('menus.php'); ?>		
	</div> 
	
	<div class="panel-heading">
		<div class="row">
			<div class="col-md-10">
				<h3 class="panel-title"></h3>
			</div>
			<div class="col-md-2" align="right">
				<button type="button" name="add" id="addUser" class="btn btn-success btn-xs">Añadir Nuevo</button>
			</div>
		</div>
	</div>
			
	<table id="listUser" class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>S/N</th>
				<th>Nombre</th>					
				<th>Email</th>
				<th>Creado el:</th>
				<th>Rol</th>
				<th>Estado</th>
				<th></th>
				<th></th>				
			</tr>
		</thead>
	</table>
	
	<div id="userModal" class="modal fade">
		<div class="modal-dialog">
			<form method="post" id="userForm">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title"><i class="fa fa-plus"></i> Añadir Usuario</h4>
					</div>
					<div class="modal-body">
						<div class="form-group"
							<label for="username" class="control-label">Nombre*</label>
							<input type="text" class="form-control" id="userName" name="userName" placeholder="User name" required>			
						</div>
						
						<div class="form-group"
							<label for="username" class="control-label">Email*</label>
							<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>			
						</div>
						
						<div class="form-group">
							<label for="status" class="control-label">Rol</label>				
							<select id="role" name="role" class="form-control">
							<option value="admin">Admin</option>				
							<option value="user">Miembro</option>	
							</select>						
						</div>	
						
						<div class="form-group">
							<label for="status" class="control-label">Estado</label>				
							<select id="status" name="status" class="form-control">
							<option value="1">Activ0</option>				
							<option value="0">Inactivo</option>	
							</select>						
						</div>

						<div class="form-group"
							<label for="username" class="control-label">Contraseña</label>
							<input type="password" class="form-control" id="newPassword" name="newPassword" placeholder="Password">			
						</div>											
						
					</div>
					<div class="modal-footer">
						<input type="hidden" name="userId" id="userId" />
						<input type="hidden" name="action" id="action" value="" />
						<input type="submit" name="save" id="save" class="btn btn-info" value="Save" />
						<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>	
<?php include('inc/footer.php');?>