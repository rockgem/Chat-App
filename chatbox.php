<?php

session_start();
include("dbconnection.php");


?>


<!DOCTYPE html>
<html>
<head>
<title>Chatter</title>
</head>

<body>
    <div class="box">
        <?php
            $var = $_POST['nickname_field'];
            $q = "INSERT INTO users (name) VALUES ($var)";
            $task = mysqli_query($connection, $q);
            echo '<p>Hello, '.$_POST["nickname_field"]. '</p>';
        
        ?>
        <ul>
            <?php
            $q = "SELECT * FROM users";
            $result = mysqli_query($connection, $q) or die(mysql_error());
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo '<li>'.$row['name'].'</li>';
                }
             } else {
                printf('No record found.<br />');
             }
             mysqli_free_result($result);
            ?>
        </ul>

    </div>


</body>

</html>