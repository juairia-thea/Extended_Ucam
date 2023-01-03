<?php
    require_once('authenticate.php');
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Select Course</title>

        <style>
            body {
                text-align: center;
            }
            form {
                padding-top: 100px
            }
        </style>
    </head>

    <body style="background-color:White;">
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

    <form method=get action=register_course_section.php>
        <h3>Select course you want to register</h3>
        
        

        <label for="Options">Course Code :</label>
      </br></br>
        <select type="text" value="Select course" class="form-control" name ="course_code">
            <?php
            require_once('db_connect.php');
            $connect = mysqli_connect( HOST, USER, PASS, DB )
                    or die("Can not connect");                    
            
            $results = mysqli_query( $connect, "SELECT * FROM course" )
                or die("Can not execute query");

            while( $rows = mysqli_fetch_array( $results ) ) {
                extract( $rows );
                echo "<option name='option'>".$course_code."</option>";

            }
            ?>
            </select>

        <input type="submit" name="submit" value="Select" />

    </form>
    </body>
</html>
