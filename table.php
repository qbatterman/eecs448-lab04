<?php
  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  echo "<table border =\"\">";

      for($x = 1; $x <= 100; $x++)
  	  {
        echo '<tr>';
        //row multiplier
        if($x > 1)
          echo '<td>' .$x. '</td>';

        for($y = 1;$y <= 100; $y++)
        {
          //Column multiplier
          if($y == 1 && $x == 1)
          {
            echo '<tr><td>  </td>';
            for($z = 1; $z <= 100; $z++)
            {
            //column mulitplier
            echo  '<td>' .$z. '</td>';
            }
            //row multiplier start/formatting
            echo '</tr><td> 1 </td>';
          }
          echo '<td>' .$x*$y. '</td>';
        }
        echo '</tr>';
      }

      echo "</table>";


?>
