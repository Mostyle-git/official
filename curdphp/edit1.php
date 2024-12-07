<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php
			 $zz= $row['id'];
			 $i= $row['name'];
			 $a=$row['email'];
			 $b=$row['phone'];
			 $c=$row['location'];
			 $d=$row['subject'];
			
	   include('connection.php');
		
	 			$query = 'UPDATE contactus set name ="'.$name.'",
					email ="'.$email.'", phone="'.$phone.'",
					location="'.$location.'", 
					subject="'.$subject.'" WHERE
					id ="'.$zz.'"';
					$result = mysqli_query($db, $query) or die(mysqli_error($db));
							
?>	
	<script type="text/javascript">
			alert("Update Successfull.");
			window.location = "index.php";
		</script>
 </body>
</html>