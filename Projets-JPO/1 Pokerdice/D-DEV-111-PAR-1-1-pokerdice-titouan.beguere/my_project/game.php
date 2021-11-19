<?php
session_start();
include 'yah.php';
$rq = "SELECT * FROM yahtzee WHERE id ='{$_SESSION['pseudo']}'";
$rst = mysqli_query($connexion, $rq);
$search = mysqli_fetch_array($rst);

?>


<!DOCTYPE html>
<html>

<head>
     <title>Yahtzee</title>
     <meta charset="utf-8" />
     <link rel="icon" type="image/png" href="img/icone.png" />
     <link rel="stylesheet" type="text/css" href="style.css" />
     <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet">

     <script src="yah.js"></script>
</head>

<body>

     <div id="username"> <?php echo $_SESSION['pseudo']; ?> </div>
     <form method="post">
          <div class="phaute">
               <input class="scoreboard" type="submit" id="1" name="Ones" value="Ones"<?php if ($search['Ones'] != '') {
                        ?> disabled <?php
}
?> />
               <input class="scoreboard1" type="text" class="in2" name="Ones1" id="Ones" value="<?php if ($search['Ones'] != '') {
                    echo $search['Ones'];
}
?>" readonly="readonly" /> </br>

               <input class="scoreboard" type="submit" id="2" name="Twos" value="Twos"<?php if ($search['Twos'] != '') {
                        ?> disabled <?php
}
?> />
               <input class="scoreboard2" type="text" class="in2" name="Twos1" id="Twos" value="<?php if ($search['Twos'] != '') {
                        echo $search['Twos'];
}
?>" readonly="readonly" /> </br>

               <input class="scoreboard" type="submit" id="3" name="Threes" value="Threes"<?php if ($search['Threes'] != '') {
                        ?> disabled <?php
}
?> />
               <input class="scoreboard3" type="text" class="in2" name="Threes1" id="Threes" value="<?php if ($search['Threes'] != '') {
                        echo $search['Threes'];
}
?>" readonly="readonly" /> </br>

               <input class="scoreboard" type="submit" id="4" name="Fours" value="Fours"<?php if ($search['Fours'] != '') {
                        ?> disabled <?php
}
?> />
               <input class="scoreboard4" type="text" class="in2" name="Fours1" id="Fours" value="<?php if ($search['Fours'] != '') {
                        echo $search['Fours'];
}
?>" readonly="readonly" /> </br>

               <input class="scoreboard" type="submit" id="5" name="Fives" value="Fives"<?php if ($search['Fives'] != '') {
                        ?> disabled <?php
}
?> />
               <input class="scoreboard5" type="text" class="in2" name="Fives1" id="Fives" value="<?php if ($search['Fives'] != '') {
                        echo $search['Fives'];
}
?>" readonly="readonly" /> </br>

               <input class="scoreboard" type="submit" id="6" name="Sixes" value="Sixes"<?php if ($search['Sixes'] != '') {
                        ?> disabled <?php
}
?> />
               <input class="scoreboard6" type="text" class="in2" name="Sixes1" id="Sixes" value="<?php if ($search['Sixes'] != '') {
                        echo $search['Sixes'];
}
?>" readonly="readonly" /> </br>
               <input class="totaux scoreboard" type="text" id="phaut" name="totalhaut" value="Total High Section" />
               <input class="scoreboard7" type="text" class="in2" name="totalsectionhaute" value="<?php echo $search['haut']; ?>" readonly="readonly" /></br>
          </div>
          <div class="pbasse">
               <input class="scoreboard" type="submit" id="bre" name="brelan" value="Three of a kind"<?php if ($search['brelan'] != '') {
                    ?> disabled <?php
}
?> />
               <input class="scoreboard8" type="text" class="in2" name="brelan1" id="brelan" value="<?php if ($search['brelan'] != '') {
                    echo $search['brelan'];
}
?>" readonly="readonly" /> </br>


               <input class="scoreboard" type="submit" id="car" name="carre" value="Four of a kind"<?php if ($search['carre'] != '') {
                    ?> disabled <?php
}
?> />
               <input class="scoreboard9" type="text" class="in2" name="carre1" id="carre" value="<?php if ($search['carre'] != '') {
                    echo $search['carre'];
}
?>" readonly="readonly" /> </br>


               <input class="scoreboard" type="submit" id="ful" name="full" value="Full house"<?php if ($search['full'] != '') {
                    ?> disabled <?php
}
?> />
               <input class="scoreboard10" type="text" class="in2" name="full1" id="full" value="<?php if ($search['full'] != '') {
                    echo $search['full'];
}
?>" readonly="readonly" /> </br>


               <input class="scoreboard" type="submit" id="pet" name="smallstraight" value="Small straight"<?php if ($search['smallstraight'] != '') {
                    ?> disabled <?php
}
?> />
               <input class="scoreboard11" type="text" class="in2" name="smallstraight1" id="smallstraight" value="<?php if ($search['smallstraight'] != '') {
                    echo $search['smallstraight'];
}
?>" readonly="readonly" /> </br>


               <input class="scoreboard" type="submit" id="gra" name="largestraight" value="Large straight"<?php if ($search['largestraight'] != '') {
                    ?> disabled <?php
}
?> />
               <input class="scoreboard12" type="text" class="in2" name="largestraight1" id="largestraight" value="<?php if ($search['largestraight'] != '') {
                    echo $search['largestraight'];
}
?>" readonly="readonly" /> </br>


               <input class="scoreboard" type="submit" id="yah" name="yahtzee" value="Yahtzee"<?php if ($search['yahtzee'] != '') {
                    ?> disabled <?php
}
?> />
               <input class="scoreboard13" type="text" class="in2" name="yahtzee1" id="yahtzee" value="<?php if ($search['yahtzee'] != '') {
                    echo $search['yahtzee'];
}
?>" readonly="readonly" /> </br>

               <input class="scoreboard" type="submit" id="cha" name="chance" value="Chance"<?php if ($search['chance'] != '') {
                    ?> disabled <?php
}
?> />
               <input class="scoreboard14" type="text" class="in2" name="chance1" id="chance" value="<?php if ($search['chance'] != '') {
                    echo $search['chance'];
}
?>" readonly="readonly" /> </br>

               <input class="totaux scoreboard" type="text" id="pabasse" name="totalbas" value="Total Low Section" />
               <input class="scoreboard15" type="text" class="in2" name="totalsectionbasse" value="<?php echo $search['bas']; ?>" readonly="readonly" />

               </br>

               <input class="scoreboard16" type="text" id="total" name="total" value="Total" />
               <input class="scoreboard16 total" type="text" class="in2" name="total" value="<?php echo $search['total']; ?>" readonly="readonly" /> </br>
          </div>
     </form>
     <div id='les_des' class="dés">
          <div>Chance: <span id='Compteur'>3</span></div>
          <span id="des1" class="des" onclick='desactiver("des1")' value=""><img src="img/1.png" /></span>
          <span id="des2" class="des" onclick='desactiver("des2")' value=""><img src="img/2.png" /></span>
          <span id="des3" class="des" onclick='desactiver("des3")' value=""><img src="img/3.png" /></span>
          <span id="des4" class="des" onclick='desactiver("des4")' value=""><img src="img/4.png" /></span>
          <span id="des5" class="des" onclick='desactiver("des5")' value=""><img src="img/5.png" /></span>
          <br>
          <button class="commencer launch" onclick='Des()'>Launch</button>

     </div>

</body>



<div class="finalscore">
        <?php
if ($search['Ones'] != ''
        && $search['Twos'] != ''
        && $search['Threes'] != ''
        && $search['Fours'] != ''
        && $search['Fives'] != ''
        && $search['Sixes'] != ''
        && $search['brelan'] != ''
        && $search['carre'] != ''
        && $search['full'] != ''
        && $search['smallstraight'] != ''
        && $search['largestraight'] != ''
        && $search['yahtzee'] != ''
        && $search['chance'] != '') {
            echo "Your final score is " . $total;
}
        ?>
</div>
<footer class="footer">
     <br>
     <button onclick="window.location='index.php'" id="new_player">New Player</button>
</footer>

<div class="tableau">
        <?php
        include_once "best-score.php";
        ?>
</div>
<a href="https://www.ultraboardgames.com/yahtzee/game-rules.php" target="blank" class="help">
<img src="img/aide.png" alt="aide">
</a>

</html>