<?php

	//Create connection
	$con = mysqli_connect('localhost', 'root', '', 'ajax');
	if(isset($_POST['name']) && isset($_POST['surname']) && isset($_POST['phnnumber']))
	{
		$name = $_POST['name'];
		$surname= $_POST['surname'];
		$phnnumber = $_POST['phnnumber'];
		
		$q= "insert into employee_form values('','$name','$surname','$phnnumber')";
		
		//echo $q;
		//exit;
		
		$qry = $con->query($q);

		if($qry == TRUE)
		{
			echo ('inserted');
		}
		else 
		{
			echo ('error');
		}
	}

?>