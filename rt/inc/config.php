<?php 
	define("HOST","localhost");
	define("DB_USER","root");
	define("DB_PASS","");
	define("DB_NAME","career1");
	
	
	$conn = mysqli_connect(HOST,DB_USER,DB_PASS,DB_NAME);
	
	if(!$conn)
	{
		die(mysqli_error());
	}
	
	
	
	function getUserAccessRoleByID($id)
	{
		global $conn;
		
		$query = "select first_name from user where  id = ".$id;
	
		$rs = mysqli_query($conn,$query);
		$row = mysqli_fetch_assoc($rs);
		
		return $row['user_role'];
	}
	
?>