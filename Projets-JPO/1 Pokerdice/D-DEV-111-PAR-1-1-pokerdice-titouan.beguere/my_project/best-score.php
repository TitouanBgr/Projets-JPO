<div class="bestscores">
<?php

$user = "root";
$pass = "";
$db = "yah";
$db = new mysqli('127.0.0.1', $user, $pass, $db) or die("unable to connect");

$sql = "SELECT id, total FROM yahtzee ORDER BY total DESC LIMIT 3";
$result = mysqli_query($db, $sql) or die("bad query");
echo "<table border='1';";
echo "<tr>Best Players</tr>";
echo "<tr><td>Player</td><td>Score</td></tr>\n";
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr><td>{$row['id']}</td><td>{$row['total']}</td></tr>\n";
}

?>
</div>