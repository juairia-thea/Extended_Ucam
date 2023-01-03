<!DOCTYPE html>
<html>
<head>
    <title>Title</title>
    <style type="text/css">
    table {
        
		background-color:gainsboro;
    }
	h2{
		margin-left:500px
	}
    </style>
</head>
<body style="background-color:white;"></body>
    </br>   
    </br>

	<style>
		h1 {text-align: center;}
		h3 {text-align: center;}
		p {text-align: center;}
		div {text-align: center;}
	</style>

    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <nav style="background-color: orange;width: auto;height: 80px;">
        <div style="color: white;text-align: center; font-size: 32px; font-weight: bold; padding-top: 20px;">Extended
            UCAM</div>

    </nav>
    <body style="background-color:white;"></body>
<?php

	require_once('db_connect.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$course_code = $_GET["course_code"];
	echo "<h2>Information of the helper<h2>";
	
	$results = mysqli_query( $connect, "SELECT * FROM student INNER JOIN helper ON student.student_id=helper.student_id Where course_code='$course_code' ; " )
		or die("Can not execute query");



	echo "<table border> \n";
	echo "<th >Student Id</th> <th>Name</th> <th>Email</th> <th>Phone number</th> <th>Course code</th>\n";


	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td > $student_id </td>";
		echo "<td> $name </td>";
		echo "<td> $email </td>";
		echo "<td> $phone_no </td>";
		echo "<td> $course_code </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";
	echo "</br>\n";
	
	echo "<button><p><a style='text-decoration:none;'href=provideInfo_input.php>Provide Information</a></button>";
?>

</body>
</html>