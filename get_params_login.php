<?php

    include 'db.php';

    include 'config.php';



    session_start();



    if(!isset($_SESSION["id"])) {

        header('Location: ' . URL . 'index.php');

    }

?>

<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">

        <title>ID Family</title>

    </head>

    <body>

        <section>

            <?php
                echo '<style>';
                require_once("css/style.css");
                echo '</style>';

                $FullName = $_GET["fullName"];

                $Password = $_GET["password"];

                $Phone = $_GET["phone"];

                $ID = $_GET["id"];

                $Type = $_GET["soldierType"];

                $Address = $_GET["address"];

                $Birth = $_GET["dateOfBirth"];


                $sql = "INSERT INTO tbl_220_users (id, user_type, user_password, user_phone, user_address, user_fullname)
                VALUES ('$ID', '$Type', '$Password', '$Phone', '$Address', '$FullName')";
                MYSQLI_SET_CHARSET($connection,'UTF8');
                if ($connection->query($sql) === TRUE) {
                    echo "New record created successfully";
                  } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                  }





                echo '<div id="Php">';

                echo "<span> :שם מלא " . $FullName . "</span>";

                echo "<span>:סיסמא שנבחרה " . $Password . "</span>";

                echo "<span>:תאריך לידה " . $Birth . "</span>";

                echo "<span>:מספר טלפון " . $Phone . "</span>";

                echo "<span>חייל/מפקד:" . $Tender . "</span>";

                echo "<span>:אנשי קשר למקרה חירום " . $Contacts . "</span>";

                echo "<span>:כתובת " . $Address . "</span>";

                echo '</div>';
                
                echo '<script> 
                     setTimeout(function(){
                     location.href = "commander.php";
                     },1) ;
                     </script>';
                echo '</div>';
            ?>      
        </section>
    </body>

</html>