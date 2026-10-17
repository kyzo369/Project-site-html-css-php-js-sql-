<?php
include "conectare.php";

$nume = $_POST["nume"];
$punctaj = 0;

if ($_POST["q1"] == "c") $punctaj++;
if ($_POST["q2"] == "c") $punctaj++;
if ($_POST["q3"] == "b") $punctaj++;
if ($_POST["q4"] == "c") $punctaj++;
if ($_POST["q5"] == "c") $punctaj++;
if ($_POST["q6"] == "c") $punctaj++;

$data = date("Y-m-d H:i:s");

$conn->query("INSERT INTO rezultate VALUES (NULL,'$nume',$punctaj,'$data')");
?>


<div class="container">
<h2>Test finalizat</h2>
<p>Nume: <b><?php echo $nume; ?></b></p>
<p>Punctaj: <b><?php echo $punctaj; ?>/10</b></p>

<form action="rezultat_personal.php" method="get">
    <input type="hidden" name="nume" value="<?php echo $nume; ?>">
    <button>Vezi rezultatul meu</button>
</form>

<form action="rezultate.php">
    <button>Vezi toate rezultatele</button>
</form>
</div>
