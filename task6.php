<table border="1">
   <?php
   for ($i = 1; $i < 10; $i++) {

       echo "<tr>";
       for ($j = 1; $j < 10; $j++) {

           echo "<td>";
           $num = $i * $j . " ";


           if (($i % 2) == 0) {
               if (($j % 2) == 0) {
                   echo "(" . $num . ")";
               } else {
                   echo $num;
               }
           } else {
               if (($j % 2) == 0) {
                   echo $num;
               } else {
                   echo "[" . $num . "]";
               }
           }
           echo "</td>";
       }
       echo "</tr>";
       echo "<br>";
       $j = 1;
   }
   ?>
</table>
