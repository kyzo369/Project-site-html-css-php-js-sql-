<?php
include "conectare.php";

$nume = $conn->real_escape_string($_GET["nume"]);

$result = $conn->query(
    "SELECT * FROM rezultate WHERE nume='$nume' ORDER BY data_test DESC LIMIT 1"
);

$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="ro">
<head>
<meta charset="UTF-8">
<title>Rezultat Test – Grecia Antică</title>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #ffffff;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 60%;
        margin: 60px auto;
        padding: 30px;
        background-color: #f4f9ff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        text-align: center;
    }

    h2 {
        color: #1e73be;
    }

    p {
        font-size: 18px;
    }

    .punctaj {
        font-size: 22px;
        font-weight: bold;
        color: #1e73be;
    }
</style>

</head>
<body>

<div class="container">
    <h2>Rezultatul meu</h2>

    <p><strong>Nume:</strong> <?php echo htmlspecialchars($nume); ?></p>

    <p class="punctaj">
        Punctaj: <?php echo $row["punctaj"]; ?>/10
    </p>

    <p>
        <strong>Data:</strong> <?php echo $row["data_test"]; ?>
    </p>
</div>

</body>
</html>