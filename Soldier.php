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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>ID Family</title>
</head>

<body id="page4">
<script src="js/scripts.js"></script>
    <div id="wrapperDesktop">
    <div id="navDesktop"></div>
    <div id="Wrapper">
        <header id="headerHolder">
            <div class="profileHolder">
                <a href="Soldier.php" class="profile"></a>
                <h2 class="soldierName">מיכאל שוורץ</h2>
            </div>
            <div id="logoHolder">
                <a href="Soldier.php" id="logo"></a>
            </div>
            <div id="menuHolder">
                <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
                <div id="mySidenav" class="sidenav">
                    <div class="profileHolder">
                        <a href="#" class="profile"></a>
                        <h2 class="soldierName">מיכאל שוורץ</h2>
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
        <main id="SoldierMain">
            <div class="searchContainer">
                <button class="searchHolderSubmited" type="submit" dir="rtl">
                    <img src="images/glasses.png" alt="">
                </button>
                <input class="searchHolder" type="search" placeholder="חיפוש" aria-label="חיפוש">
            </div>
            <h3 id="hFavorite">מועדפים</h3>
            <div id="favoriteHolder">
                <a id="fav1" href="#" class="favorite">
                    <img src="images/fav1.jpg" alt="">
                    <div class="rec"></div>
                    <span class="favSpan">משפחת לוי תל אביב</span>
                </a>
                <a id="fav2" href="#" class="favorite">
                    <img src="images/fav2.jpg" alt="">
                    <div class="rec"></div>
                    <span class="favSpan">משפחת כהן רחובות</span>
                </a>
                <a id="fav3" href="#" class="favorite">
                    <img src="images/fav3.jpg" alt="">
                    <div class="rec"></div>
                    <span class="favSpan">משפחת ישועה רעננה</span>
                </a>
            </div>
            <div id="selectDisplayHolder">
                <div class="selectContainer">
                    <a href="#" class="activeItem">רשימה</a>
                    <a href="#" class="nonActiveItem">מפה</a>
                </div>
            </div>
            <div id="ListTubHolder">
                <div id="ListHolderContiner">
                    <div class="selectTubContainer">
                        <a href="#" class="activeItem">בתי אירוח</a>
                        <a href="#" class="nonActiveItem">קרובים</a>
                        <a href="#" class="nonActiveItem">מומלצים</a>
                    </div>
                </div>
            </div>
            <div id="articlesHolder">
                <a id="arct1" href="#" class="arct">
                    <img src="images/image1.jpg" alt="Guest house">
                    <div class="rec2"> 
                    </div>
                    <h3 class="h3Arct">בית החייל</h3> 
                    <span id="arctSpan1">ירושלים · 072-2702258</span>
                    <a href="#" id="arctA1">1 חברים מתארחים</a>
                </a>
                <a id="arct2" href="#" class="arct">
                    <img src="images/image2.jpg" alt="Guest house">
                    <div class="rec2">
                    </div>
                    <h3 class="h3Arct">בית החייל</h3>
                    <span id="arctSpan2">רמת גן · 072-2702283</span>
                    <a href="#" id="arctA2">6 חברים מתארחים</a>
                </a>
            </div>
            <div id="upcomingEvemtsHolder">
                <h3 id="Events">אירועים</h3>
                <img src="images/Hannucha.jpg" alt="Hannucha" id="EventsImg">
                <p dir="rtl"><b>חג החנוכה-</b> חג החנוכה חוגגים<br>
                     בקצרין אירוח עם משפחות <br> 
                     הקהילה בהיכל הפיס בשעה 20:15 <br> 
                     מתקיים טקס בהנחייתו של המנחה <br> 
                     קרלוס אורטגה שמגיע במיוחד שמגיע <br>
                     לפנק את החיילים עם מיטב שיריו
                </p>
            </div>
        </main>
    </div>
    <div id= "LightBox">
        <form action="get_params_add_connection.php" method="GET" class="form-horizontal">
        <?php
            
            $query = "SELECT * FROM tbl_220_users WHERE id = 8579586";
            MYSQLI_SET_CHARSET($connection,'UTF8');
            $result = mysqli_query($connection , $query);
            $row    = mysqli_fetch_array($result);
            if($row[8] == 1){

                echo "<script> LightBox(); </script>";

                echo '<h2>:שליחת מיקום</h2>';

                echo '<h3>:טקסט מהמפקד</h3>';

                echo "<p>" . $row[9] . "</p>";

                echo '<select name="place_id" id="place_id">';
                
                echo '<option value="1">בית החייל ירושלים</option>';
                
                echo '<option value="2">בית החייל רמת גן</option>';

                echo '<option value="3">משפחת לוי תל אביב</option>';

                echo '<option value="4">משפחת כהן רחובות</option>';

                echo '<option value="5">משפחת ישועה רעננה</option>';

                echo '</select>';

                echo '<input id="Sent" class="submit-button" type="submit" value="שליחה" class="btn btn-secondary btn-sm">';
            }
        ?>
        </form>
    </div>
    </div>
</body>
</html>