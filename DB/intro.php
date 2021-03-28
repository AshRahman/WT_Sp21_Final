<?php
    $db_server="localhost"
    $db_user="root";
    $db_password="";
    $db_name="intro"

    $conn=mysqli_connect($db_server,$db_user,$db_password,$db_name);
    $query="SELECT * from users";
    $result=mysqli_query($conn,$query);

?>
<table>
    <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Type</th>
    </tr>
    <?php
    while($row=mysqli_fetch_assoc($result)){
        echo "<tr>";
            echo "<td>".$row[id]."</td>";
            echo "<td>".$row[username]."</td>";
            echo "<td>".$row[type]."</td>";
        echo "/tr";
    }
    
    ?>



</table>