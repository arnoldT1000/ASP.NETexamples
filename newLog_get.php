<html>
<body>
Welcome <?php echo $_GET["name"] ?> <br>
Email: <?php echo $_GET["email"] ?> <br>
Address:<?php echo $_GET["addr"] ?> <br><br>
<?php
    include 'configuration.php';

//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "test";

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}

// Clean data
  $_GET["name"] = htmlspecialchars(strip_tags($_GET["name"]));
  $_GET["email"] = htmlspecialchars(strip_tags($_GET["email"]));
  $_GET["addr"] = htmlspecialchars(strip_tags($_GET["addr"]));

// prepare and bind
$stmt = $conn->prepare("INSERT INTO user_info (Name, Email, Address) VALUES (?, ?, ?)");



$stmt->bind_param("sss", $name, $email, $addr);

// set parameters and execute
$name = $_GET["name"] ;
$email = $_GET["email"] ;
$addr = $_GET["addr"] ;
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>

</body>
</html>