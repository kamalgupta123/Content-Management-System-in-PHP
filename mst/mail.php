<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
      $to="guptakamal137@gmail.com";
      $sub="kamal gupta";
      $msg="<h1>kamal</h1>is awesome";
      $header="From:guptakamal@yahoo.in";
    $result=mail($to,$sub,$msg,$header);
    if($result){
        echo "good";
    }
    else{
        echo "bad";
    }
    ?>
</body>
</html>