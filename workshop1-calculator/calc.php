<?php
require_once("calculator.php");
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8"> 
        <title>Calculator</title>
    </head>
    <body>
    <?php
        echo $_SESSION["current"];
        echo $_SESSION["result"];
    ?>
          <form method="get" action="" >
            
            <button name="input" value="1">1</button>
            <button name="input" value="2">2</button>
            <button name="input" value="3">3</button>
            <button name="input" value="+">+</button>
            <br>
            
            <button name="input" value="4">4</button>
            <button name="input" value="5">5</button>
            <button name="input" value="6">6</button>
            <button name="input" value="-">-</button>
            <br>
          
            <button name="input" value="7">7</button>
            <button name="input" value="8">8</button>
            <button name="input" value="9">9</button>
            <button name="input" value="*">*</button>
            <br>
        
            <button name="input" value="c">c</button>
            <button name="input" value="0">0</button>
            <button name="input" value="=">=</button>
            <button name="input" value="/">/</button>
            <br>
  
    
          </form>
    </body>
</html>
