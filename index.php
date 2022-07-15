<?php

    include 'db.php';

    include 'config.php';

    if(!isset($_SESSION["id"])) {
        session_start();
        session_destroy();

    }

    if(!empty($_POST["loginID"])) {


        $query  = "SELECT * FROM tbl_220_users WHERE id='" 

            . $_POST["loginID"] 

            . "' and user_password = '"

            . $_POST["loginPass"]

            ."'";


        $result = mysqli_query($connection , $query);

        $row    = mysqli_fetch_array($result);



        if(is_array($row)) {



            session_start();

            $_SESSION["id"] = $row['id'];


            if($row['id'] == '8769865'){
                header('Location: ' . URL . 'commander.php');
            }
            if($row['id'] == '8579586'){
                header('Location: ' . URL . 'Soldier.php');
            }

        } else {

            echo 'Authentication failed !';

            $message = "Invalid username or password !";

        }

    }

?>



<!DOCTYPE html>

<html>

    <head>
    <link rel="stylesheet" href="css/style.css">
    <link
        
            rel="stylesheet"

            href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"

            integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"

            crossorigin="anonymous"/>

        <script

            src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"

            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"

            crossorigin="anonymous">

        </script>

    </head>
    <header>
</header>
    <body>
        <div class="container">
        <a href="index.php" id="logoIndex"></a>
                <form action="#" method="post" id="frm" autocomplete="off">
                <div class="form-group">
                  
                

                <label id="lableID" for="loginID">ID: </label>
                    <input type="number" class="form-control" name="loginID" id="loginID"
                         placeholder="Enter ID" autocomplete="off" />

                </div>

                <div class="form-group">

                    <label id="labelpass" for="loginPass">Password: </label>

                    <input type="password" class="form-control" name="loginPass" id="loginPass"

                        placeholder="Enter Password" autocomplete="off" />

                </div>

                <button id="submitButton" type="submit" class="btn btn-primary">Log Me In</button> 



                <div class="error-message">

                    <?php if(isset($message)) { 

                            echo $message; 

                        } 

                    ?>

                </div>  

            </form>

        </div>

    </body>

</html>

