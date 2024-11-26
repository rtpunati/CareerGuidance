<?php 
		$time = strftime("%B-%d-%Y");
		
		function main_query($sql){
		
		$conn = new mysqli("localhost","root","","career1");
		
		// Check connection 
			if($conn->connect_error){
				die("Database connection failed! " . $conn->connect_error);
			}
		$result = $conn->query($sql);
		if($result)
                {
                    return $result;
                }else{
                    return $conn->error;
                }
		
		
		}
		
		$con = mysqli_connect("localhost","root","","career1");
			if(!$con){
				die("Database connection failed");
			}
		
		$per_page = 3;
		
		$pages_query = mysql_query("SELECT COUNT(*) article");
		$pages = ceil(mysql_result($pages_query, 0) / $per_page);
		$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
		$start = ($page - 1) * $per_page;
		$query = mysql_query("SELECT * FROM article LIMIT $start, $per_page");
		
		while($row = mysql_fetch_assoc($query)){
			echo $row['name']."<br />";
		}
		
		if($pages >= 1){ 
		
			for($x=1; $x<=$pages; $x++){
				echo "<a href='?page=".$x."'>".$x."</a>";
			}
			
		}

?>