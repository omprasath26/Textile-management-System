<?php
ob_start();
$action = $_GET['action'];
include 'admin_class.php';
$crud = new Action();
if($action == 'login'){
	$login = $crud->login();
	if($login)
		echo $login;
}
if($action == 'login2'){
	$login = $crud->login2();
	if($login)
		echo $login;
}
if($action == 'logout'){
	$logout = $crud->logout();
	if($logout)
		echo $logout;
}
if($action == 'logout2'){
	$logout = $crud->logout2();
	if($logout)
		echo $logout;
}
if($action == 'save_user'){
	$save = $crud->save_user();
	if($save)
		echo $save;
}
if($action == 'delete_user'){
	$save = $crud->delete_user();
	if($save)
		echo $save;
}
if($action == 'signup'){
	$save = $crud->signup();
	if($save)
		echo $save;
}
if($action == 'update_account'){
	$save = $crud->update_account();
	if($save)
		echo $save;
}
if($action == "save_settings"){
	$save = $crud->save_settings();
	if($save)
		echo $save;
}
if($action == "save_supplier"){
	$save = $crud->save_supplier();
	if($save)
		echo $save;
}
if($action == "save_employee"){
	$save = $crud->save_employee();
	if($save)
		echo $save;
}
if($action == "delete_supplier"){
	$delete = $crud->delete_supplier();
	if($delete)
		echo $delete;
}
if($action == "delete_employee"){
	$delete = $crud->delete_employee();
	if($delete)
		echo $delete;
}
if($action == "save_product"){
	$save = $crud->save_product();
	if($save)
		echo $save;
}
if($action == "delete_product"){
	$delete = $crud->delete_product();
	if($delete)
		echo $delete;
}

if($action == "save_receiving"){
	$save = $crud->save_receiving();
	if($save)
		echo $save;
}
if($action == "delete_receiving"){
	$delete = $crud->delete_receiving();
	if($delete)
		echo $delete;
}
if($action == "save_order"){
	$save = $crud->save_order();
	if($save)
		echo $save;
}
if($action == "delete_order"){
	$delete = $crud->delete_order();
	if($delete)
		echo $delete;
}
ob_end_flush();
?>
