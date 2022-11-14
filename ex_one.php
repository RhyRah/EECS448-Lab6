<!DOCTYPE html>
   <head>
     <title>Exercise One</title>
   </head>

     <body>
        <center><h1>Exercise One</h1></center>
        <center><p> Create a PHP program that displays a 100X100 multiplication table </p></center>
        <center> 
         <?php
           echo "<table border =\"1\" style='border-collapse: collapse'>";
	          for ($row=1; $row <= 100; $row++) { 
		         echo "<tr> \n";
		         for ($col=1; $col <= 100; $col++) { 
		            $p = $col * $row;
		            echo "<td>$p</td> \n";
		       	  }
	  	        echo "</tr>";
		        }
		          echo "</table>";
          ?>
        </center>
     </body>

</html>
