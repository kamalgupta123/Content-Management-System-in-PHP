<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <?php
    if(isset($_REQUEST['submit'])){
        echo $_REQUEST['kamal'];
    }
    ?>
   
    <form action=" " method="post">
        <input type="text" name="kamal">
        <input type="submit" name="submit">
    </form>
</body>
</html>