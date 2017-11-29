<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="assets/css/komyu.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/progres.css">
    <link rel="stylesheet" href="assets/fontawesome/css/font-awesome.min.css">
    <meta charset="UTF-8">
    <title>Cinema</title>
</head>
<body class="container-fluid">
    <?php
    echo "<table style='border: solid 1px black;'>";
    echo "<tr><th>Titre</th><th>Année</th><th>Description</th><th>Realisateur</th></tr>";

    class TableRows extends RecursiveIteratorIterator {
        function __construct($it) {
          parent::__construct($it, self::LEAVES_ONLY);
        }

        function current() {
          return "<td style='border:1px solid black;'>" . parent::current(). "</td>";
        }

        function beginChildren() {
          echo "<tr>";
        }

        function endChildren() {
          echo "</tr>" . "\n";
        }
    }
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "movies";

    try {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $pdo->prepare("SELECT titre, annee, description, realisateur FROM film");
        $stmt->execute();

    // set the resulting array to associative
        $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
          echo $v;
          }
    }
    catch(PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
    $pdo = null;
    ?>
</body>
</html>
