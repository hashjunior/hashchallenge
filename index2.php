<?php

$username = $_POST['username'];
$secret_text = $_POST['secret_text'];

$con = mysqli_connect("localhost","Hash","Jun@2023","challenge");
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

$username = mysqli_real_escape_string($con,$username);
$secret_text = mysqli_real_escape_string($con,$secret_text);

$query = "INSERT INTO challenge (UserName,SecretText) VALUES ('$username','$secret_text')";
mysqli_query($con,$query);

?>
