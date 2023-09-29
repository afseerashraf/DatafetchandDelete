<?php
include 'fetch.php';
$delete = $_GET['c_id'];
$query = "DELETE FROM CUSTOMER WHERE CUSTOMER_ID='$delete'";
if(mysqli_query($connect,$query)){
    header("Location:fetch.php");
    exit();
}else{
    echo "Item can not delete";
}
?>