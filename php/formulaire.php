


<?php include 'db_connect.php'; 

$mysqli = new mysqli("localhost", $username, $password, $database);

// Don't forget to properly escape your values before you send them to DB
// to prevent SQL injection attacks.

$nom = $mysqli->real_escape_string($_POST[$nom]);
$prenom = $mysqli->real_escape_string($_POST[$prenom]);
$pays = $mysqli->real_escape_string($_POST[$pays]);
$langue = $mysqli->real_escape_string($_POST[$langue]);
$montant = $mysqli->real_escape_string($_POST[$montant]);

$query = "INSERT INTO formulaire (nom, prenom, pays, langue, montant)
            VALUES ('Paul','Lubin','Guatemal','French','50.6')";

$mysqli->query($query);
$mysqli->close();
?>