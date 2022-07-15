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
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <link rel="stylesheet" href="css/style.css">
        <title>ID Family</title>
    </head>
    <body class="page2">
        <div id="navDesktop"></div>
        <div id="Wrapper" >
            <header id="headerHolder">
                <div class="profileHolder">
                    <a href="commander.php" class="profile2"></a>
                    <h2 class="soldierName">אריאל טובים</h2>
                </div>
                <div id="logoHolder">
                    <a href="commander.php" id="logo"></a>
                </div>
                <div id="menuHolder">
                    <span onclick="openNav()">&#9776;</span>
                    <div id="mySidenav" class="sidenav">
                        <div class="profileHolder" style="margin-top: 10px;">
                            <a href="#" class="profile2"></a>
                            <h2 class="soldierName">אריאל טובים</h2>
                        </div>
                        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                        <div class="buffer"></div>
                        <a href="#">פרופיל</a>
                        <a href="#">הודעות</a>
                        <a href="#">מסמכים</a>
                        <a href="#">אירועים</a>
                        <div class="buffer"></div>
                        <a href="#">הגדרות</a>
                        <a href="index.php">התנתקות</a>
                    </div>
                </div>
            </header>
            <form action="get_params_login.php" method="GET" class="form-horizontal" id="AddSoldier">
                <h1>הוספת חייל חדש</h1>
                <div class="form-group">
                <label  >:שם מלא
                    <div>
                    <input type="text" name="fullName" placeholder="שם מלא">
                    </div>
                </label>
                </div>
                <br>
                <div class="form-group">
                <label >:סיסמא ראשונית
                    <div>
                    <input type="password" name="password" placeholder="סיסמא" >
                    </div>
                </label>
                </div>
                <br>
                <div class="form-group">
                <label >:תאריך לידה
                    <div>
                    <input type="date" name="dateOfBirth" >
                    </div>
                </label>
                </div> 
                <br>         
                <div class="form-group">
                        <label >:מספר טלפון
                            <div>
                                <input type="text" name="phone" placeholder="מספר טלפון">
                            </div>
                        </label>  
                </div>        
                <br>
                <div class="form-group">
                    <span>:חייל\מפקד</span>
                    <br>
                    <label>חייל<input type="radio" name="soldierType" value="2"></label>
                    <label>מפקד<input type="radio" name="soldierType" value="1"></label>
                </div>
                <br>  
                <div class="form-group">
                <label >:מספר אישי
                    <div>
                        <input type="text" name="id" placeholder="מספר אישי">
                    </div>
                </label>  
                </div>
                <br>
                <div class="form-group">
                    <label >:מקום מגורים
                        <div>
                            <input type="text" name="address" cols="30" rows="2"  placeholder="כתובת">
                        </div>
                    </label>
                </div>
                <br>
                <br>
                <input class="submit-button" type="submit" value="שליחה" class="btn btn-secondary btn-sm">
            </form>
        </div>
        <script src="js/commanderScripts.js"></script>
    </body>
</html>