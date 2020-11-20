<html>
<head>
<title>ITF Lab</title>
    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'labkmitl13.mysql.database.azure.com', 'arm143@labkmitl13', 'it-63070143', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>
<table id="myTable" class="display table table-hover table table table-dark table-striped">
    <thead>
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Link </div></th>
  </tr>
    </thead>h6
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
      <td><h6 style="color:red;"><?php echo $Result['Name'];?></h6></td>
    <td><h6 style="color:blue;"><?php echo $Result['Comment'];?></h6></h6></td>
    <td><h6 style="color:green;"><?php echo $Result['Link'];?></h6></td>
    <td><?php echo $Result['Action'];?><center><a href = "remove.php?delete_id=<?php echo $Result['ID']; ?>"><button type="button" class="btn btn-warning">Remove</button></a>
                    <a href = "edit_form.php?edit_id=<?php echo $Result['ID']; ?>"><button type="button" class="btn btn-warning">Edit</button></a></center></td>
  </tr>
<?php
}
?>
</table>
<script>
        $(document).ready(function () {
            $("#myTable").DataTable();
        });
    </script>
<?php
mysqli_close($conn);
?>
<center><a href = "form.php"><button type="button" class="btn btn-info">Add</button></a></center>
</body>
</html>
