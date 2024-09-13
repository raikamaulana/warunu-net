<?php

session_start();
if (!isset($_SESSION["username"])) {
  echo "<script>
            alert('Login dibutuhkan.');
            window.location.href = 'login.php';
          </script>";
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dist/output.css">
    <title>Document</title>
</head>
<body>
  
    <h1>acumalaka</h1>
    <div class="grid grid-cols-5 gap-4">
  <div class="w-16 h-16 bg-gray-300 rounded-md flex items-center justify-center">PC 1</div>
  <div class="w-16 h-16 bg-gray-300 rounded-md flex items-center justify-center">PC 2</div>
  <div class="w-16 h-16 bg-gray-300 rounded-md flex items-center justify-center">PC 3</div>
  <div class="w-16 h-16 bg-gray-300 rounded-md flex items-center justify-center">PC 4</div>
  <div class="w-16 h-16 bg-gray-300 rounded-md flex items-center justify-center">PC 5</div>
  <div class="w-16 h-16 bg-gray-300 rounded-md flex items-center justify-center">PC 6</div>
  <div class="w-16 h-16 bg-gray-300 rounded-md flex items-center justify-center">PC 7</div>
  <div class="w-16 h-16 bg-gray-300 rounded-md flex items-center justify-center">PC 8</div>
  <div class="w-16 h-16 bg-gray-300 rounded-md flex items-center justify-center">PC 9</div>
  <div class="w-16 h-16 bg-gray-300 rounded-md flex items-center justify-center">PC 10</div>
</div>

</body>
</html>