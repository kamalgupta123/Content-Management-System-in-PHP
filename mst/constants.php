<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php 
     define("KAM",10);
     const K=30;
     echo KAM;
     echo K;
     $array=array("kamal",1,"komal",2);
     var_dump($array);
     print_r($array);
     $s="kamal gupta";
     echo strpos($s,'a',2)."<br>";
     echo str_word_count($s)."<br>";
     echo strlen($s);
    
    $a=10;
    if($a%2==0){
        echo "no is even";
    }
    function add($x,$y){
        $z=$x+$y;
        echo $z;
    }
    add(4,3);
     ?>
</body>
</html>