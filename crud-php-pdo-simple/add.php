<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$lectureid=$_POST['lecture_id'];
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$roolid=$_POST['rollid']; 
$lectureemail=$_POST['email']; 
$password=$_POST['password']; 
$faculty=$_POST['faculty']; 
$department=$_POST['department']; 
$dob=$_POST['dob']; 

	 
		// if all the fields are filled (not empty) 
			
		//insert data to database		
		$sql="INSERT INTO  tbllectures(lecture_Id,first_name,last_name,roll_id,email,password,faculty,department,dob) VALUES(:lectureid,:firstname,:lastname,:roolid,:lectureemail,:password,:faculty,:department,:dob)";
		$query = $dbConn->prepare($sql);
				
		query = $dbh->prepare($sql);
$query->bindParam(':lectureid',$lectureid,PDO::PARAM_STR);
$query->bindParam(':firstname',$firstname,PDO::PARAM_STR);
$query->bindParam(':lastname',$lastname,PDO::PARAM_STR);
$query->bindParam(':roolid',$roolid,PDO::PARAM_STR);
$query->bindParam(':lectureemail',$lectureemail,PDO::PARAM_STR);
$query->bindParam(':password',$password,PDO::PARAM_STR);
$query->bindParam(':faculty',$faculty,PDO::PARAM_STR);
$query->bindParam(':department',$department,PDO::PARAM_STR);
$query->bindParam(':dob',$dob,PDO::PARAM_STR);

$query->execute();

		
		/$query->execute(array(':lectureid' => $lectureid, 
                      ':firstname' => $firstname,
                      ':lastname' =>$lastname,
                      ':roolid' =>$roolid,
                       ':lectureemail' =>$lectureemail,
                       ':password' =>$password,
                       ':faculty' =>$faculty,
                      ':department'  =>$department,
                       ':dob' =>$dob,

                      
                    
                    ));
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index.php'>View Result</a>";
	
}
?>
</body>
</html>
