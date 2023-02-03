<!DOCTYPE html>
<html> 
  <head> 
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Dailychallenge/title>
    </head>
    <body>

    <h1>Chess Board</h1>
  <!-- Write a PHP program using nested for loop that creates a chess board.-->   
    <table  width="400px"  height="250px" cellspacing="0px" cellpadding="0px"  border ="3px">
      <?php
      
        for($lineChessBoard=1;$lineChessBoard<=8;$lineChessBoard++)
        { 
          echo "<tr>";
         
          for($colChessBoard=1;$colChessBoard<=8;$colChessBoard++)
          {
            $total=$lineChessBoard + $colChessBoard;
           
            if($total%2==0)
            {
              
              echo "<td height=30px width=30px bgcolor=white></td>";
            }
            else
            {
              
              echo "<td height=30px width=30px bgcolor=black></td>";
            }
          }
          echo "</tr>";
        }
      ?>
    </table>
    </body>
</html>
