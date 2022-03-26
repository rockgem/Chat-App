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
        <?php echo '<p>Hello, '.$_POST["nickname_field"]. '</p>'?>
        <ul>
            <?php
            $q = "SELECT * FROM users";
            $data = mysqli_query($connection, $q) or die(mysql_error());
            foreach($data as $user){
                echo '<p>wtf</p>';
            }

            ?>
        </ul>

    </div>


</body>

</html>