<?php
include "conectare.php";
$result = $conn->query("SELECT * FROM rezultate ORDER BY data_test DESC");
?>

<!DOCTYPE html>
<html lang="ro">
<head>
<meta charset="UTF-8">
<title>Toate Rezultatele – Grecia Antică</title>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #ffffff;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 80%;
        margin: 50px auto;
        padding: 30px;
        background-color: #f4f9ff;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0,0,0,0.1);
        text-align: center;
    }

    h2 {
        color: #1e73be;
        margin-bottom: 25px;
    }

    table {
        width: 100%;
        border-collapse: collapse;
    }

    th {
        background-color: #1e73be;
        color: white;
        padding: 12px;
    }

    td {
        padding: 10px;
        border-bottom: 1px solid #ddd;
    }

    tr:nth-child(even) {
        background-color: #e6f0fa;
    }

    tr:hover {
        background-color: #d0e4f7;
    }
</style>

</head>
<body>

<div class="container">
<h2>Toate rezultatele</h2>

<table>
<tr>
    <th>Nume</th>
    <th>Punctaj</th>
    <th>Data</th>
</tr>

<?php
while ($row = $result->fetch_assoc()) {
    echo "<tr>
            <td>" . htmlspecialchars($row['nume']) . "</td>
            <td>" . htmlspecialchars($row['punctaj']) . "/10</td>
            <td>" . htmlspecialchars($row['data_test']) . "</td>
          </tr>";
}
?>

</table>
</div>

</body>
</html>