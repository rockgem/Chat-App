<?php

session_start();
include('dbconnection.php');

//comment
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


<script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/9.6.11/firebase-app.js";
  import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.6.11/firebase-analytics.js";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  // For Firebase JS SDK v7.20.0 and later, measurementId is optional
  const firebaseConfig = {
    apiKey: "AIzaSyAI6ly_ZksyUtERGLSXwK1pFJIEogyNoJ8",
    authDomain: "chat-app-50fbc.firebaseapp.com",
    projectId: "chat-app-50fbc",
    storageBucket: "chat-app-50fbc.appspot.com",
    messagingSenderId: "450379239219",
    appId: "1:450379239219:web:2706ed1e6eef7bab627846",
    measurementId: "G-4MTNZ6X860"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const analytics = getAnalytics(app);
</script>