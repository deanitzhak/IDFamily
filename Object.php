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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>ID Family</title>
</head>
<body class="page3">
    <div id="navDesktop"></div>
    <div id="Wrapper">
        <header id="headerHolder">
            <div class="profileHolder">
                <a href="#" class="profile2"></a>
                <h2 class="soldierName">אריאל טובים</h2>
            </div>
            <div id="logoHolder">
                <a href="commander.php" id="logo"></a>
            </div>
            <div id="menuHolder">
                <span onclick="openNav()">&#9776;</span>
                <div id="mySidenav" class="sidenav">
                    <div class="profileHolder">
                        <a href="commander.php" class="profile2"></a>
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
    <main id="Object">
        <div id="ProfileHolder">
            <img src="images/michaelProfile1.png" alt="ProfilePic">
            <h3>מיכאל שוורץ</h3>
            <span id="BneiBrak">בני ברק- 050-2136722</span>
            <span id="LastLocation">:מיקום אחרון</span>
            <a href="#" id="SoliderHouse">בית החייל ירושלים</a>
            <button id="Requests" type="button" href="#">בקשות</button>
            <span id="Time">החייל לא עדכן מיקום מעל 1 ימים</span>
        </div>
        <div id="Documents">
            <h3>מסמכים</h3>
            <section class="Document" id="Document1">
                <i class="material-icons">&#xe2c7;</i>
                <span class="BigSpan" id="Ptorim">פטורים</span>
                <span class="SmallSpan">09.09.2020</span>
            </section>
            <section class="Document" id="Document2">
                <i class="material-icons">&#xe2c7;</i>
                <span class="BigSpan" id="Sherot">תנאי שירות</span>
                <span class="SmallSpan">18.10.2020</span>
            </section>
            <section class="Document" id="Document3">
                <i class="material-icons">&#xe2c7;</i>
                <span class="BigSpan" id="Work">אישורי עבודה</span>
                <span class="SmallSpan">17.05.2020</span>
            </section>
        </div>

        <div id="Contacts">
            <span class="BigSpan">אנשי קשר למקרה חירום</span>
            <section class="Contacts" id="FirstContact">
                <i class="fa">&#xf2bd;</i>
                <span id="Contact1">שמואל שוורץ</span>
                <span id="Phone1">054-5576988</span>
            </section>
            <section class="Contacts" id="SecondContact">
                <i class="fa">&#xf2bd;</i>
                <span id="Contact2">רוחמה שוורץ</span>
                <span id="Phone2">054-4638567</span>
            </section>
        </div>
    </main>
    </div>
    <div id="LightBox">
    <form action="get_params_Request.php" method="GET" class="form-horizontal" id="FormObject">
        <div class="form-group">
            <a href="" class="closebtn">x</a>
            <label>בקשת מיקום<input type="radio" name= "user_alerts" value= "1">
                אחר<input type="radio" name= "user_alerts" value= "2">
            </label>
            <span id="Big">הוספת הודעה לבקשה:</span>
            <textarea name="user_alerts_text" cols="20" rows="5"></textarea>
            <input class="submit-button" type="submit" value="שליחה" class="btn btn-secondary btn-sm">
        </div>
    </form>
    </div>
    <script src="js/commanderScripts.js"></script>
</body>
</html>