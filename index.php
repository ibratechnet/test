<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Enter Motion Data</title>
  <style>
    body {
      background-color: violet;
      font-family: sans-serif;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .form1 {
      background-color: aquamarine;
      width: 90%;
      max-width: 400px;
      padding: 20px;
      box-shadow: 5px 8px 40px 2px rgba(0, 0, 0, 0.2);
      border-radius: 10px;
    }

    form {
      display: flex;
      flex-direction: column;
    }

    label {
      margin: 10px 0 5px;
      font-weight: bold;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
      padding: 10px;
      border-radius: 8px;
      border: 1px solid #ccc;
      font-size: 16px;
    }

   

    button {
      margin-top: 20px;
      padding: 10px;
      font-size: 16px;
      border-radius: 8px;
      border: none;
      background-color: orange;
      cursor: pointer;
    }

    @media (max-width: 500px) {
      .form1 {
        width: 95%;
        padding: 15px;
      }

      input,
      button {
        font-size: 14px;
      }
    }
  </style>
</head>
<body>
  <div class="form1">
    <form action="" method="POST">
      <label for="data">Motion_Data</label>
      <input type="text" id="mydata" name="data" required placeholder="Enter Motion_Data" />
      <button type="submit" name="submit">Submit</button>
    </form>
  </div>
  <?php
if (isset($_POST['submit'])) {
    include 'connect.php'; 
    $data = $_POST['data'];
    $sql = "INSERT INTO Motion_data(Motion_Detected) VALUES ('$data')";
    $result = mysqli_query($conn, $sql);
    if ($conn->query($sql) === TRUE) {
    // echo"Sensor Data successfully inserted";
    header("location: select.php");
    } else {
        // echo"Failed to insert Data";
    }

    $conn->close(); 
}
?>

</body>
</html>
