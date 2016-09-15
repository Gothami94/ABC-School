<?php
include('../config/connect.php');
include('../controller/siteController.php');
$pdo = connect();

$ID=$_GET['ID'];

	$sql1 = "SELECT * FROM student WHERE ID=:stdId";
	$query1 = $pdo->prepare($sql1);
	$query1->execute(array('stdId'=>$ID));
	$rowCount = $query1->rowCount();
	$results  = $query1->fetchAll();

	foreach($results as $rs) {
		$name = $rs['name'];
		$address = $rs['address'];
		$email = $rs['email'];
		$tele = $rs['tele'];
	}

    $sql="UPDATE student SET name='name', address='address', email='email', tele='tele' WHERE ID:=stdId";
	$query= $pdo -> prepare($sql);
	$query->execute(array('stdId'=>$ID,  'name'=>$name,'address'=>$address,'email'=>$email,'tele'=>$tele));


		// if successfully updated. 
		if($result){
		echo "Record added successfuly";
		echo "<BR>";
		echo "<a href='../view/first.php'>View result</a>";
		}

		else {
		echo "ERROR";
		}

    ?>


