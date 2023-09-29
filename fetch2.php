<?php
$username = 'root';
$password = "";
$host = "localhost";
$db = "mydatabase";
$connect = mysqli_connect($host, $username, $password, $db);
$pdo = new PDO($connect);
if($connect){
    $select = 'SELECT * FROM `detailes`';
    $result = mysqli_query($connect, $select);
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

    <title>mydatabase</title>
</head>
<body>
    <table border="1" class="table table-striped" >
        <tr>
            <th>s.NO</th>
            <th>NAME</th>
            <th>AGE</th>
            <th>PLACE</th>
            <th>PHONE</th>
            <th>DOCTOR_NAME</th>
            <th>DEPARTMENT</th>
            
        </tr>
        <?php
        while($rows = mysqli_fetch_assoc($result)){
        ?>
        <tr>
            <td><?php echo $rows['s.No']; ?></td>
            <td><?php echo $rows['NAME']; ?></td>
            <td><?php echo $rows['AGE']; ?> </td>
            <td><?php echo $rows['PLACE']; ?></td>
            <td><?php echo $rows['PHONE']; ?></td>
            <td> <?php echo $rows['doctor_name']; ?></td>
            <td><?php echo $rows['department']; ?></td>
            
            
        </tr>
        <?php
        }
        ?>
    </table>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>