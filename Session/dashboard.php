<?php
    session_start();
?>
<html>
    <body>
        <h1>Welcome <?php echo $_SESSION["user"];?></h1>
    </body>

</html>