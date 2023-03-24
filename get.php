<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "trip";

$con = mysqli_connect($servername,$username, $password,$dbName);

if(mysqli_connect_error()){
    echo "fail";
}


$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$email = $_POST['email'];

$sql = "INSERT INTO `trip`.`tr` (`name`, `age`, `gender`, `email`) VALUES ('$name', '$age', '$gender', '$email');";

if ($con->query($sql) == true){
    echo "successful inserted";
}

else{
    echo "Error: $sql <br> $con->error";
}
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<link rel="stylesheet" href="style.css">
<body>
   <div class="con">
    <h1>Class Trip</h1>
        <form action="" method="post">
            <input type="text" name="name" id="name" placeholder="Enter your name">
            <input type="text" name="age" id="age" placeholder="age">
            <input type="text" name="gender" id="gender" placeholder="gender">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <button type="submit" class="btn">Submit</button>
        </form>   
        
   </div>
</body>
</html> -->
