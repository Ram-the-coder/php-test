<!DOCTYPE html>
<html>
<head>
  <title>getuser.php</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<?php
$q = $_GET['q'];
include("./connect.php");
$sql="SELECT * FROM details WHERE name = '".$q."'";
$result = $conn->query($sql);
echo "<table class='table table-striped'>
<tr>
<th>Name</th>
<th>Phone</th>
<th>Email</th>
<th></th>
</tr>";
while($row=$result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['name'] . "</td>";
    echo "<td>" . $row['phone'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "</td><td><a href=\"./delete.php?del=".$row["email"]."\"><button class='btn btn-danger btn-small'>Delete</button></a></td>";
    echo "</tr>";
}
echo "</table>";
$conn->close();
?>
</body>
</html>
