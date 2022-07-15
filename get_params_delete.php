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

                $ID = $_GET["id"];

                echo $ID;

                $sql = "DELETE FROM tbl_220_users WHERE (`id` = '$ID')";
   
                MYSQLI_SET_CHARSET($connection,'UTF8');
                if ($connection->query($sql) === TRUE) {
                    echo "record deleted successfully";
                  } else {
                    echo "Error: " . $sql . "<br>" . $conn->error;
                  }





                echo '<div id="Php">';

             
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