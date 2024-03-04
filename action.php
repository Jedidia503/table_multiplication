<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Action</title>
</head>
<body>

    <?php
        $a = $_POST["a"];
        $b = $_POST["b"];
        
       
         for($i=1;$i<=$b;$i++){
            $c = $a * $i;
            echo "<h1>$i x $a = $c</h1>";
         }
    ?>

</body>
</html>
