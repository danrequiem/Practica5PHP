<?php

echo '<table border="1" cellspacing=0>';

$num =1;
for($a=1; $a<=10; $a++)
    {

    echo "<tr style=\"background-color:".(($a%2==0)?"blue":"white")."\">";
    for($b=1; $b<=10; $b++)
        {
        echo '<td>'.$num++.'</td>';
        }
    echo '</tr>';
    }
   
echo '</table>';

?> 


</html>