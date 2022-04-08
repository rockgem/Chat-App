<?php

session_start();
include('dbconnection.php');

?>

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <title>Chat Web</title>
</head>

    <body>
        <div class="box">
            <div>
                <form method="post" action="chatbox.php">
                    <h1 id="header1">Enter nickname</h1><br>
                    <input id="field" type="text" name="nickname_field" autocomplete="off"><br>
                    
                    <input id="button" type="submit" name="OK">
                </form>
            </div>
        </div>
    </body>

</html>