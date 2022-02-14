<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php  
include 'header.php';

$conn = mysqli_connect("localhost","root","","cr") or die("Connection Failed");

$sql = "SELECT * FROM student JOIN studentclass WHERE student.sclass = studentclass.cid";
$result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");
if(mysqli_num_rows($result) > 0)  {

?>


    <table border="1px solid black" cellpadding:7px; >
       
<tr>
    <th>sno</th>
    <th>name</th>
    <th>address</th>
    <th>class</th>
    <th>action</th>
</tr>
<?php   while($row = mysqli_fetch_assoc($result)){?>

<tr>

    <td><?php echo $row['sid']; ?></td>
    <td><?php echo $row['sname']; ?></td>
    <td><?php echo $row['saddress']; ?></td>
    <td><?php echo $row['sname']; ?></td>
    <td><?php echo $row['sphone']; ?></td>
   

</tr>
<?php }?>



    </table>
<?php }?>
</body>
</html>


