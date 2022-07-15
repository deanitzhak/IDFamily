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

                $AlertType = $_GET["user_alerts"];

                $Text = $_GET["user_alerts_text"];

                $sql = "UPDATE `dbShnkr22studWeb1`.`tbl_220_users` SET `user_alerts` = '$AlertType', `user_alerts_text` = '$Text' WHERE (`id` = '8579586');";
                MYSQLI_SET_CHARSET($connection,'UTF8');
                if ($connection->query($sql) === TRUE) {
                    echo "New record created successfully";
                  } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                  }





                echo '<div id="Php">';

                echo "<span> :מספר אישי" . $ID . "</span>";

                echo "<span>:סוג התראה" . $AlertType . "</span>";

                echo "<span>:טקסט" . $Text . "</span>";

                echo '</div>';
                
                echo '<script> 
                     setTimeout(function(){
                     location.href = "commander.php";
                     },1) ;
                     </script>';
                
            ?>      
        </section>
    </body>

</html>