
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title> Very skilled web developer at the begginning of 2021</title>
</head>
<body>	
// I use the function inlude here so that i can work with the database
<?php include 'db_connect.php'; 

$sql = "SELECT productCode, productName, productDescription, quantityInStock, buyPrice FROM products";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "productCode: " . $row["productName"]. " - productDescription: " . $row["quantityInStock"]. " " . $row["buyPrice"]. "<br>";
  
  } 
}else {
  echo "0 results";
}
$conn->close();
?>

</body>

</html>












