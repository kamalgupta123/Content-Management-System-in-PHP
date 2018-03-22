<?php
       $var="kamal";
       $hashFormat="$2y$10$";//10 tyms search page for password password inside diff
       $salt="iusesomecrazystrings22";
       $hashF_and_salt=$hashFormat.$salt;
       $password=crypt($var,$hashF_and_salt);
       echo $password;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    
</body>
</html>