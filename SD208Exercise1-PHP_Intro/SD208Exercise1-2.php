<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Chess Board</title>
</head>
<body>
<table width="400px" cellspacing="0px" cellpadding="0px">
    <?php

    echo "<h1>", "This is a Chess Board!", "</h1>";

    
    for($myRow=1;$myRow<=8;$myRow++)
	  {
          echo "<tr>";
          for($myCol=1;$myCol<=8;$myCol++)
		  {
          $totalRowsCols=$myRow+$myCol;
          if($totalRowsCols%2!=0)
		  {
          echo "<td height=50px width=50px bgcolor=#0d0d0d></td>";
          }
		  else
		  {
          echo "<td height=50px width=50px bgcolor=#e6e6e6></td>";
          }
          }
          echo "</tr>";
    }


    ?>
</table>
</body>
</html>