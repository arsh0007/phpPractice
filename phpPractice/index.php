<?php
    $insert = false;
    if (isset($_POST['name'])) 
    {   
        // Set Connection variables
        $server = "localhost";
        $username = "root";
        $password = "";
        
        // Create a database connection
        $con = mysqli_connect($server, $username, $password);

        // Check For Connection Success
        if(!$con)
        {
            die("Connection to this database failed due to ". mysqli_connect_error());
        }

        // echo "Success Connect to the db"
        // Collect POST variable
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $other = $_POST['other'];

        $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$other', current_timestamp());";
        // echo $sql;

        // Execute the Query
        if($con->query($sql)==true)
        {
            //Flag for successful insertion
            $insert = true;
            //echo "successfully inserted";

        }
        else
        {
            echo "Error: $sql <br> $con->error";
        }

        //Close the database connection
        $con->close();
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome To Travel Form</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img src="bg.jpg" class="bg" alt="Spain">
    <div class="container">
        <h1>
            Welcome to Spain trip form
        </h1>
        <p>
            Enter your details and submit the form to confirm your participation in the trip.
        </p>
        <?php
            if ($insert == true) {
                echo "<p class='submitMsg'>
                Thanks for submitting the form.
            </p>";
            }
        ?>

        <form action="index.php" method="post">
            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="text" name="age" id="age" placeholder="Enter Your age">
            <input type="text" name="gender" id="gender" placeholder="Enter Your gender">
            <input type="emial" name="email" id="email" placeholder="Enter Your email">
            <input type="number" name="phone" id="phone" placeholder="Enter Your phone">
            <textarea name="other" id="desc" cols="30" rows="10" placeholder="Enter Any Other info."> </textarea>

            <button class="btn" >Submit</button>
        </form>



    </div>
    <script src="index.js">

    </script>
</body>
</html>