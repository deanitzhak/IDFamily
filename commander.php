<?php

    include 'db.php';

    include 'config.php';



    session_start();



    if(!isset($_SESSION["id"])) {

        header('Location: ' . URL . 'index.php');

    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>ID Family</title>
</head>

<body class= "page1">
    <div id="wrapperDesktop">
    <div id="navDesktop"></div>
    <div id="Wrapper">
        <header id="headerHolder">
            <div class="profileHolder">
                <a href="commander.php" class="profile2"></a>
                <h2 class="soldierName">אריאל טובים</h2>
            </div>
            <div id="logoHolder">
                <a href="commander.php" id="logo"></a>
            </div>
            <div id="menuHolder">
                <span id="btnNav" onclick="openNav()">&#9776;</span>
            <div id="mySidenav" class="sidenav">
                    <div class="profileHolderNav">
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
        <div class="clear"></div>
        <main>
            <div id="beforeListHolder">
                <div id="editingCotainer">
                    <div class="editingTubCotainer">
                        <a href="AddSolider.php" class="activeItem">הוספה</a>
                        <a href="#" class="nonActiveItem">עריכה</a>
                        <a href="#" id="delete" class="nonActiveItem">מחיקה</a>
                    </div>
                </div>
                <div class="searchContainer">
                    <button class="searchHolderSubmited" type="submit" dir="rtl">
                        <img id= "SearchLogo" src="images/glasses.png" alt="">
                    </button>
                    <input class="searchHolder" type="search" placeholder="חיפוש">
                </div>
            </div>
            <div id="listHolder">
            <?php
                    $query = "SELECT * FROM tbl_220_users WHERE user_type= '1'";
                    MYSQLI_SET_CHARSET($connection,'UTF8');
                    $result = mysqli_query($connection , $query);
                    while($row    = mysqli_fetch_array($result)){
                        echo '<div class="solderObj">';
                        echo '<div class="disc">';
                        echo '<h1 dir="rtl">' . $row[1] .'</h1>';
                        echo '<div class="textHolder"  dir="rtl">';
                        echo '<h4>עדכן מיקום בשעה:</h4>'; 
                        echo '<h5 >'.$row[10].'</h5>';
                        echo '</div>';
                        echo '</div>';
                        echo '<div class="aCounaiter">';
                        echo '<a href="Object.php" class="aSoldaier">';
                        echo '<img src="' . $row[6] . '" alt="" class="objImage">';
                        echo '</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                ?>
            </div>
            <div id="lightBoxDelete">
            <form action="get_params_delete.php" method="GET" class="form-horizontal">
            <?php
                $query = "SELECT * FROM tbl_220_users WHERE user_type= '1'";
                MYSQLI_SET_CHARSET($connection,'UTF8');
                $result = mysqli_query($connection , $query);
                echo '<label >:רשימת חיילים למחיקה';        
                echo '<select name="id" >';
                while($row    = mysqli_fetch_array($result)){
                    echo '<option value= '.$row[0].'>'.$row[1].'</option>';
                }
                echo '</select>';
                echo '</lable>';
                echo '<input class="submit-button" type="submit" value="שליחה" class="btn btn-secondary btn-sm">'
            ?>
            </form>
            </div>
        </main>
    </div>
    </div>
    <div class="clear"></div>
    <script src="js/commanderScripts.js"></script>
</body>

</html>