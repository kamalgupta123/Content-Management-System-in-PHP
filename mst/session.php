<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
     session_start();
     $_SESSION['ID']="KAMAL";
     echo $_SESSION['ID'];
    ?>
</body>
</html>