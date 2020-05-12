<!DOCTYPE html>
<!-- Rachel Coe, CS334 -->
<html>

<body>

    <?php

$i; 
for ($i = 1; $i <= 100; $i++) 
{ 

    if ($i % 4 == 0)  
        echo "Hail to ";  
    if ($i % 6 == 0)  
        echo "Pitt";                        
    if($i % 6 != 0 && $i % 4 != 0) // print the number          
        echo "$i";   
    echo "<br>";
} 
?>
    <br>
    <br>
    <a href="lab5.php">Link to source code</a>
</body>

</html>
