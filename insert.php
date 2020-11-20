<?php

$conn = mysqli_init();
mysqli_real_connect($conn, 'labkmitl13.mysql.database.azure.com', 'arm143@labkmitl13', 'it-63070143', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}


$name = $_POST['name'];
$comment = $_POST['comment'];
$link = $_POST['link'];


$sql = "INSERT INTO guestbook (Name , Comment , Link) VALUES ('$name', '$comment', '$link')";


if (mysqli_query($conn, $sql)) {
    echo "<h2 style='text-align:center; color:white;'>New record created successfully</h2>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
  
mysqli_close($conn);
?>
<center><a href = "index.php"><button type="button" class="btn btn-info">Continue</button></a></center>
