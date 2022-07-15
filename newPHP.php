<?php
                    $query = "SELECT * FROM tbl_220_users WHERE user_type= '1'";
                    MYSQLI_SET_CHARSET($connection,'UTF8');
                    $result = mysqli_query($connection , $query);
                    while($row    = mysqli_fetch_array($result)){
                        echo '<div class="solderObj">';
                        echo '<div class="disc">';
                        echo '<h1 dir="rtl">' . $row[1] .'</h1>';
                        echo '<div class="textHolder"  dir="rtl">';
                        echo '<h4>עדכן מיקום לפני</h4>';
                        echo '';
                        echo '</div>';
                        echo '<div class="aCounaiter">';
                        echo '<a href="#" class="aSoldaier">';
                        echo '<img src="' . $row[6] . '" alt="" class="objImage">';
                        echo '</a>';
                        echo '</div>';
                        echo '</div>';
                    }
                ?>

<div class="solderObj">
                    <div class="disc">
                        <h1 dir="rtl">מיכאל שוורץ</h1>
                            <div class="textHolder"  dir="rtl">
                                <h4>עדכן מיקום לפני</h3>
                                <h5 style="color: brown;">1 ימים</h5>
                            </div>
                    </div>
                    <div class="aCounaiter">
                        <a href="Object.php" class="aSoldaier">
                            <img src="images/michaelProfile1.png" alt="" class="objImage">
                        </a>
                    </div>
                </div>
                <div class="solderObj">
                    <div class="disc">
                        <h1 dir="rtl">דרור אמסלם</h1>
                            <div class="textHolder"  dir="rtl">
                                <h4>עדכן מיקום לפני</h3>
                                <h5 >2 שעות</h5>
                            </div>
                    </div>
                    <div class="aCounaiter">
                        <a href="#" class="aSoldaier">
                            <img src="images/DrorProfile1.png" alt="" class="objImage" >
                        </a>
                    </div>
                </div>
                <div class="solderObj">
                    <div class="disc">
                        <h1 dir="rtl">אבינועם יוסף</h1>
                            <div class="textHolder"  dir="rtl">
                                <h4>עדכן מיקום לפני</h3>
                                <h5 >4 שעות</h5>
                            </div>
                    </div>
                    <div class="aCounaiter">
                        <a href="#" class="aSoldaier">
                            <img src="images/avinoamProfile.png" alt="" class="objImage">
                        </a>
                    </div>
                </div>
                <div class="solderObj">
                    <div class="disc">
                        <h1 dir="rtl">רות קיידר</h1>
                            <div class="textHolder"  dir="rtl">
                                <h4>עדכן מיקום לפני</h3>
                                <h5>4 שעות</h5>
                            </div>
                    </div>
                    <div class="aCounaiter">
                        <a href="#" class="aSoldaier">
                            <img src="images/RothProfile1.png" alt="" class="objImage">
                        </a>
                    </div>
                </div>
                
