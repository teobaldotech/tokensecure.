<!DOCTYPE html>
<html>
<head>
  <title>Gerador de Tabela</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      padding: 30px;
      text-align: center;
    }
    form {
      margin-bottom: 20px;
    }
    input[type="number"] {
      padding: 8px;
      margin: 5px;
      width: 100px;
    }
    input[type="submit"] {
      padding: 8px 16px;
      background-color: #007BFF;
      color: white;
      border: none;
      cursor: pointer;
    }
    table {
      border-collapse: collapse;
      width: 300px;
      margin: auto;
      background-color: #fff;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }
    th {
      background-color: #007BFF;
      color: white;
      padding: 10px;
    }
    td {
      padding: 8px;
      border-bottom: 1px solid #ddd;
    }
    tr:hover {
      background-color: #f1f1f1;
    }
  </style>
</head>
<body>

<h2>Gerador de Números</h2>

<form method="post">
  <label>Início:</label>
  <input type="number" name="inicio" required>
  <label>Fim:</label>
  <input type="number" name="fim" required>
  <br>
  <input type="submit" value="Gerar Tabela">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $inicio = intval($_POST["inicio"]);
  $fim = intval($_POST["fim"]);

  if ($inicio > $fim) {
    echo "<p style='color:red;'>O número inicial deve ser menor que o final.</p>";
  } else {
    echo "<table><tr><th>Número</th></tr>";
    for ($x = $inicio; $x <= $fim; $x++) {
      echo "<tr><td>$x</td></tr>";
    }
    echo "</table>";
  }
}
?>

</body>
</html>