<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Session</title>
    <link rel="icon" type="image/png" href="images/favicon.png">

    <style>
    .body
    {
      background-image:url("images/intro-bg.jpg");
      background-attachment: fixed;
      position:absolute;
      top:160px;
      left:450px;
    }
    .entre
    {
      color:white;
      font-size: 20px;
      font-family: "PANAMA"
    }
    form
    {

        width:500px;
    }
    fieldset {
        padding:0 20px 20px 10px;
        margin-bottom:10px;
        border:4px solid white;
    }
    legend {
        color:white;
        font-weight:bold
    }
    label {
        margin-top:10px;
        display:block;
    }
    label.inline {
        display:inline;
        margin-right:40px;
    }
    input, textarea, select, option {
        background-color:white;
    }
    input, textarea, select {
        padding:7px;
        border:2px solid #F5C5C5;
        border-radius:5px;
        width:250px;
        box-shadow:1px 1px 2px  white inset;
    }
    select {
        margin-top:10px;
    }
    input[type=radio] {
        background-color:transparent;
        border:none;
        width:30px;
    }
    input[type=checkbox] {
        background-color:transparent;
        border:none;
        width:30px;
    }
    input[type=submit], input[type=reset] {
        width:150px;
        margin-left:5px;
        box-shadow:1px 1px 1px #D83F3D;
        cursor:pointer;
    }
    p
    {
        color:white;
        font-size: larger;
    }

    </style>
  </head>
  <body class="body">

            <a href="index.php"><img src="images/footer-logo.png"></a>
                <form action="sess1.php" method="post">
                  <form action="objectifs.php" method="post">
                    <form action="Evenements.php" method="post">
                    <fieldset>
                        <legend>Connectez-vous</legend>
                        <h3 class="entre">Veuillez entrer votre nom d'utilisateur</h3>
                  <input type="text" name="user" placeholder="Login">
                  <input type="submit" value="Se Connecter">
                    </fieldset>
                </form>
  </body>
</html>
