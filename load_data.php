<?php
// require_once 'database.php';
// $connect = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
// if(!empty($_GET['q']))
// {	
// 	// echo $_GET['q'];
// 	$uniqueTag=$_GET['q'];
// 	// var_dump($uniqueTag);
// 	// die();
// 	$query="SELECT * from blog where uniqueTag='$uniqueTag'";
// 	if($result=$connect->query($query))
// 	{
// 		if($result->num_rows>0)
// 		{
// 			$row=$result->fetch_assoc();
// 			$row['topics']=unserialize($row['topics']);
// 			$row=json_encode($row);
// 			// var_dump($row);
// 			// die();
// 			echo $row;
// 		}
// 		else
// 		{
// 			die("Invalid URL");
// 		}
// 	}
// 	else
// 	{
// 		die("Invalid URL");
// 	}
// }

if(!empty($_GET['q']))
{
	$data=$_GET['q'];
	$find=array('uniqueTag' => $data );

	$m = new Mongo(); 	// Default localhost

	$db=$m->mydb;
	$collection=$db->blog;
	$cursor=$collection->findone($find);
	echo json_encode($cursor);	
}



?>
