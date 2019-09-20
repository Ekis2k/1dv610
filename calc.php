<?php
require_once("calculator.php");
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Calculator</title>
    </head>
    <body>
          <form method="POST" action="calculator.php" >
            
            <input type="text" name="input" />
            <br>
            
            <input type="button" value="1" />
            <input type="button" value="2" />
            <input type="button" value="3" />
            <input type="button" name="action" value="+" />
            <br/>
            
            <input type="button" value="4" />
            <input type="button" value="5" />
            <input type="button" value="6" />
            <input type="button" name="action" value="-" />
            </br>
          
            <input type="button" value="7" />
            <input type="button" value="8" />
            <input type="button" value="9" />
            <input type="button" name="action" value="x" />
            </br>
        
            <input type="button" value="c" />
            <input type="button" value="0" />
            <input type="button" value="=" />
            <input type="button" name="action" value="/" />
            </br>
  
    
          </form>
    </body>
</html>

<?php
    
?>