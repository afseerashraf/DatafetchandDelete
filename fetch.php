<?php
//include 'customer.php';
$username = 'root';
$password = "";
$host = "localhost";
$db = "learndb";
$connect = mysqli_connect($host, $username, $password, $db);
if($connect){
    $select = 'SELECT * FROM `customer`';
    $result = mysqli_query($connect,$select);
    
}else{
    echo "Connection problem";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <title>Fetch Data</title>
</head>
<body>
    <table border="1" class="table table-striped-columns" >
        <tr>
        <th>customer_id</th>
        <th>customer_name</th>
        <th>customer_place</th>
        <th>phone</th>
        <th>email</th>
        <th>operation</th>
        </tr>
        <?php
        while($rows = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $rows['customer_id']; ?><t/d>
            <td><?php echo $rows['customer_name']; ?></td>
            <td><?php echo $rows['customer_place']; ?></td>
            <td><?php echo $rows['phone'];?></td>
            <td><?php echo $rows['email']; ?></td>
            <td><button class="btn btn-outline-danger"><a href="delete.php?c_id=<?php echo $rows['customer_id']; ?>" style="text-decoration: none;">Delete</td>
        </tr>
        <?php
        }
        ?>
     </table>
     

     <?php
     
     ?>



     <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>