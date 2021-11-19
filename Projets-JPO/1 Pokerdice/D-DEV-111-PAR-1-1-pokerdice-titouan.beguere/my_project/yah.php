<?php
$connexion = mysqli_connect("127.0.0.1", "root", "", "yah");

if (isset($_POST['Ones'])) {
    $Ones1 = intval($_POST['Ones1']);
    $haut = intval($_POST['totalsectionhaute']);
    $total = intval($_POST['total']);
    $haut += $Ones1;
    $total += $Ones1;
    mysqli_query($connexion, "UPDATE yahtzee SET Ones='$Ones1',haut='$haut',total='$total' where id='{$_SESSION['pseudo']}'");
    echo mysqli_error($connexion);
}

if (isset($_POST['Twos'])) {
    $Twos1 = intval($_POST['Twos1']);
    $haut = intval($_POST['totalsectionhaute']);
    $total = intval($_POST['total']);
    $haut += $Twos1;
    $total += $Twos1;
    mysqli_query($connexion, "UPDATE yahtzee SET Twos='$Twos1',haut='$haut',total='$total' where id='{$_SESSION['pseudo']}'");
    echo mysqli_error($connexion);
}

if (isset($_POST['Threes'])) {
    $Threes1 = intval($_POST['Threes1']);
    $haut = intval($_POST['totalsectionhaute']);
    $total = intval($_POST['total']);
    $haut += $Threes1;
    $total += $Threes1;
    mysqli_query($connexion, "UPDATE yahtzee SET Threes='$Threes1',haut='$haut',total='$total' where id='{$_SESSION['pseudo']}'");
    echo mysqli_error($connexion);
}
if (isset($_POST['Fours'])) {
    $Fours1 = intval($_POST['Fours1']);
    $haut = intval($_POST['totalsectionhaute']);
    $total = intval($_POST['total']);
    $haut += $Fours1;
    $total += $Fours1;
    mysqli_query($connexion, "UPDATE yahtzee SET Fours='$Fours1',haut='$haut',total='$total' where id='{$_SESSION['pseudo']}'");
    echo mysqli_error($connexion);
}
if (isset($_POST['Fives'])) {
    $Fives1 = intval($_POST['Fives1']);
    $haut = intval($_POST['totalsectionhaute']);
    $total = intval($_POST['total']);
    $haut += $Fives1;
    $total += $Fives1;
    mysqli_query($connexion, "UPDATE yahtzee SET Fives='$Fives1',haut='$haut',total='$total' where id='{$_SESSION['pseudo']}'");
    echo mysqli_error($connexion);
}
if (isset($_POST['Sixes'])) {
    $Sixes1 = intval($_POST['Sixes1']);
    $haut = intval($_POST['totalsectionhaute']);
    $total = intval($_POST['total']);
    $haut += $Sixes1;
    $total += $Sixes1;
    mysqli_query($connexion, "UPDATE yahtzee SET Sixes='$Sixes1',haut='$haut',total='$total' where id='{$_SESSION['pseudo']}'");
    echo mysqli_error($connexion);
}

if (isset($_POST['brelan'])) {
    $brelan1 = intval($_POST['brelan1']);
    $bas = intval($_POST['totalsectionbasse']);
    $total = intval($_POST['total']);
    $bas += $brelan1;
    $total += $brelan1;
    mysqli_query($connexion, "UPDATE yahtzee SET brelan='$brelan1',bas='$bas',total='$total' where id='{$_SESSION['pseudo']}'");
    echo mysqli_error($connexion);
}

if (isset($_POST['carre'])) {
    $carre1 = intval($_POST['carre1']);
    $bas = intval($_POST['totalsectionbasse']);
    $total = intval($_POST['total']);
    $bas += $carre1;
    $total += $carre1;
    mysqli_query($connexion, "UPDATE yahtzee SET carre='$carre1',bas='$bas',total='$total' where id='{$_SESSION['pseudo']}'");
    echo mysqli_error($connexion);
}

if (isset($_POST['full'])) {
    $full1 = intval($_POST['full1']);
    $bas = intval($_POST['totalsectionbasse']);
    $total = intval($_POST['total']);
    $bas += $full1;
    $total += $full1;
    mysqli_query($connexion, "UPDATE yahtzee SET full='$full1',bas='$bas',total='$total' where id='{$_SESSION['pseudo']}'");
    echo mysqli_error($connexion);
}

if (isset($_POST['smallstraight'])) {
    $smallstraight1 = intval($_POST['smallstraight1']);
    $bas = intval($_POST['totalsectionbasse']);
    $total = intval($_POST['total']);
    $bas += $smallstraight1;
    $total += $smallstraight1;
    mysqli_query($connexion, "UPDATE yahtzee SET smallstraight='$smallstraight1',bas='$bas',total='$total' where id='{$_SESSION['pseudo']}'");
    echo mysqli_error($connexion);
}

if (isset($_POST['largestraight'])) {
    $largestraight1 = intval($_POST['largestraight1']);
    $bas = intval($_POST['totalsectionbasse']);
    $total = intval($_POST['total']);
    $bas += $largestraight1;
    $total += $largestraight1;
    mysqli_query($connexion, "UPDATE yahtzee SET largestraight='$largestraight1',bas='$bas',total='$total' where id='{$_SESSION['pseudo']}'");
    echo mysqli_error($connexion);
}

if (isset($_POST['yahtzee'])) {
    $yahtzee1 = intval($_POST['yahtzee1']);
    $bas = intval($_POST['totalsectionbasse']);
    $total = intval($_POST['total']);
    $bas += $yahtzee1;
    $total += $yahtzee1;
    mysqli_query($connexion, "UPDATE yahtzee SET yahtzee='$yahtzee1',bas='$bas',total='$total' where id='{$_SESSION['pseudo']}'");
    echo mysqli_error($connexion);
}

if (isset($_POST['chance'])) {
    $chance1 = intval($_POST['chance1']);
    $bas = intval($_POST['totalsectionbasse']);
    $total = intval($_POST['total']);
    $bas += $chance1;
    $total += $chance1;
    mysqli_query($connexion, "UPDATE yahtzee SET chance='$chance1',bas='$bas',total='$total' where id='{$_SESSION['pseudo']}'");
    echo mysqli_error($connexion);
}
