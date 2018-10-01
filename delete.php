<?php
include("./connect.php");
$delete_id=$_GET['del'];
$sql="DELETE FROM details WHERE email='$delete_id'";
if($conn->query($sql))
{
  echo ("<script LANGUAGE='JavaScript'>
  window.alert('The user has been deleted');
  window.location='./index.php';
  </script>");
}
else {
  echo ("<script LANGUAGE='JavaScript'>
    window.alert('Unknown error in deleting the user');
    window.location='./index.php';
    </script>");  
}

?>
