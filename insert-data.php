<?php
    //connection of db functions
    require_once 'db_functions.php';
    $database = new db_functions();

    if(isset($_POST["submit"])){

        $lastname = trim($_POST["lastname"]);
        $firstname = trim($_POST["firstname"]);

        $database->insert_data($lastname,$firstname);
        echo "DATA  INSERTED";


    }
?>

<html>
    <head>
        <title>Insert Data</title>
    </head>
    <body>
        <form method="POST">
            <input type="text" name="lastname" placeholder="Input Lastname" required>
            <input type="text" name="firstname" placeholder="Input Firstname" required>
            <button name="submit">Save</button>
        </form>
    </body>
</html>