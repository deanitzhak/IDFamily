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

                $sql = "UPDATE `dbShnkr22studWeb1`.`tbl_220_users` SET `user_alerts` = '0', `user_alerts_text` = '' WHERE (`id` = '8579586');";
                MYSQLI_SET_CHARSET($connection,'UTF8');
                if ($connection->query($sql) === TRUE) {
                    echo "New record created successfully";
                  } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                  }





                echo '<div id="Php">';

             
                echo '<script> 
                     setTimeout(function(){
                     location.href = "Soldier.php";
                     },1) ;
                     </script>';
                echo '</div>';
            ?>      
        </section>
    </body>

</html>