<?php 
    require_once('authenticate.php');
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="register_course_section.css">
</head>
<body style="background-color:White;"></body>
    </br>   
    </br>
	<div class="container">

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
	echo "<h2>Selected Courses<h2>";
	
	$results = mysqli_query( $connect, 
        "SELECT * 
        FROM course_section 
        INNER JOIN course_section_time 
        ON course_section.course_id=course_section_time.course_id 
        Where course_code='$course_code' ; " )
		or die("Can not execute query");

    echo "<div class='table'> \n";
	echo "<table border> \n";
	echo "<th>Course code</th> <th>section</th> <th>Starting Time</th> <th>Ending Time</th> <th>Day</th>\n";

    function getTimeFromFloat($floatTime) {
        $hour = round($floatTime);
        return $hour.":".(($floatTime - $hour)*100);
    }

    function getWeekDay($value) {
        $arr = ["Saturday", "Sunday", "Monday", "Tuestday", "Wednesday", "Thursday", "Friday"];
        return $arr[$value]; 
    }

	while( $rows = mysqli_fetch_array( $results ) ) {
		extract( $rows );
		echo "<tr>";
		echo "<td> $course_code </td>";
		echo "<td> $section_name </td>";
		echo "<td> ".getTimeFromFloat($starting_time)." </td>";
		echo "<td> ".getTimeFromFloat($ending_time)." </td>";
		echo "<td> ".getWeekDay($day)." </td>";
		echo "</tr> \n";
	}

	echo "</table> \n";
    echo "</div> \n";

	// echo "<p><a href=provideInfo_input.php>Select Section</a>";
?>

    <form method=get action=register_course_result.php>
        </br>
        <!-- <h4>Select Section</h4> -->
        

        <label for="Options">Select Section</label>
      </br>
        <select type="text" value="Select course" class="form-control" name ="section_name">
            <?php            
            $results = mysqli_query( $connect, 
            "SELECT * FROM course_section where course_code = '$course_code'" )
                or die("Can not execute query");

            while( $rows = mysqli_fetch_array( $results ) ) {
                extract( $rows );
                echo "<option name='option'>".$section_name."</option>";
            }
            ?>
            </select>

        <input type="hidden" name="course_code" value="<?php echo $course_code; ?>">
        <input type="submit" value="Select" />

    </form>
    </div>

</body>
</html>