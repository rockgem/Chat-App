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
            $result = mysqli_query($connection, $q) or die(mysql_error());
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                   echo '<p>'.$row['name'].'</p>';
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