<?php
	$studentid = $_GET["studentid"];
			$email = $_GET['email'];
	$password = $_GET['password'];
	$accountno= $_GET['accountno'];
	$rechargeamount= $_GET['rechargeamount'];

	
$conn = new mysqli('localhost','root','','test');
        
		if (mysqli_connect_errno()) {
			die("Connection error: " . mysqli_connect_error());
		}           
				
		$sql = "INSERT INTO recharge_tkash(studentid,email,password,accountno,rechargeamount)
				VALUES (?, ?, ?, ?, ?)";
		
		$stmt = mysqli_stmt_init($conn);
		
		if ( ! mysqli_stmt_prepare($stmt, $sql)) {
		 
			die(mysqli_error($conn));
		}
		
		mysqli_stmt_bind_param($stmt, "issii",
							   $studentid,
							   $email,
							   $password,
							   $accountno,
							   $rechargeamount
							   );
		
		mysqli_stmt_execute($stmt);
		
		echo "Successfully loan delivered of 50tk";