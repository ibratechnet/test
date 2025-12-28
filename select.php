<?php
include 'connect.php'; 
$sql = "SELECT * FROM Motion_data";
$result = mysqli_query($conn,$sql);
?>


<!DOCTYPE html>
<html>
<head>
    <title>Motion Data</title>
    <style>
        body {
            font-family: Arial;
            background-color:violet;
            padding: 20px;
        }
        table {
            border-collapse: collapse;
            width: 80%;
            background: white;
            margin: auto;
            box-shadow: 50px 30px 50px 20px rgba(0,0,0,0.2);
        }
        th, td {
            padding: 12px;
            border: 1px solid #ccc;
            text-align: center;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        h2 {
            text-align: center;
            color: #333;
        }
      #change{
        background-color: white;
      }
    </style>
</head>
<body>

<h2>MOTION DATA COLLECTED</h2>

<table>
    <tr>
        <th>ID</th>
        <th>Motion_Detected</th>
        <th>Time stamp</th>
        <th>Update</th>
        <th>Delete</th>
       
    </tr>
    <?php

    if(mysqli_num_rows($result)>0) {

        while($row=mysqli_fetch_array($result)) {
            ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['Motion_Detected']; ?></td>
        <td><?php echo $row['timestamp'];?></td>
  
        <td><a href="update.php?nbr=<?php  echo $row['id']; ?>">Edit</a></td>
        <td><a href="delete.php?nbr=<?php  echo $row['id']; ?> ">Delete</a></td>
        
    </tr>
<?php }} else{ 
}
?>
</table>
   
</body>
</html>
