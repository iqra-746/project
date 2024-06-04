<?php
 $firstName = $_POST ['first-name'];
 $LastName = $_POST ['LastName'];
 $EmailAddress = $_POST ['EmailAddress'];
 $ContactNo. = $_POST ['ContactNo'];

 //database connection
 $conn = new mysqli('localhost','root', 'registration')
 if($conn->connect_error){
    die('connection failed :' .$conn->connect_error);
 } else{
    $stmt = $conn->prepare("insert into registeration(firstName, LastName, Emailaddress, ContactNo,) values(?,?,?,?)");
    $stmt->bind_param("sssi", $firstName,$LastName, $EmailAddress,$ContactNo);
    $stmt->execute();
    echo"registeration Successfully...."
    $stmt->close();
    $conn->close();
 }
 ?>