<?php
include '../data/fetchData.php';

if(isset($_POST)) {
  $conn = createDBConnection();
  $dataAsArray = [
    "Email" => $_POST['Email'],
    "Password" => $_POST['Password'],
  ];
  $isAdmin = joinInAdminPanel($conn, $dataAsArray);
  closeDBConnection($conn);
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escape admin</title>
    <link rel="icon" type="image/x-icon" href="/static/imgs/admin.svg">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lora&family=Oxygen&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/static/styles/<?= $isAdmin ? "adminPanel.css" : "adminLogin.css"?>">
  </head>
  <body>
  <?php echo "<div style='display: none;' class='get-elems' data-email='{$dataAsArray['Email'][0]}'></div>" ?>
  <?php include $isAdmin ? './adminPanel.php' : './loginAdmin.php' ?>
  </body>
</html>
