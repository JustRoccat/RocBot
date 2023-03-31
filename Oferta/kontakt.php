<?php
// ustawienia połączenia z bazą danych MySQL
$servername = "89.171.139.112:3306";
$username = "u31_Y6HZhcF98w";
$password = "yj4i=!^8KaGKOe5r!!81oIp6";
$dbname = "s31_forum";

// tworzenie połączenia z bazą danych
$conn = new mysqli($servername, $username, $password, $dbname);

// sprawdzenie czy połączenie się udało
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// jeśli formularz został przesłany
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // pobranie danych z formularza
  $phone_number = $_POST["phone_number"];
  $name = $_POST["name"];
  $message = $_POST["message"];

  // wstawienie danych do bazy danych
  $sql = "INSERT INTO messages (phone_number, name, message)
  VALUES ('$phone_number', '$name', '$message')";

  if ($conn->query($sql) === TRUE) {
    echo "Wiadomość wysłana!";
  } else {
    echo "Błąd: " . $sql . "<br>" . $conn->error;
  }
  
  // zamknięcie połączenia z bazą danych
  $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Formularz kontaktowy</title>
    <link rel="stylesheet" type="text/css" href="kontakt.css">
</head>
<body>
	<h1>Formularz kontaktowy</h1>
	<form method="post">
		<label for="phone_number">Numer telefonu:</label>
		<input type="text" name="phone_number" required><br>

		<label for="name">Imię i nazwisko lub nick:</label>
		<input type="text" name="name" required><br>

		<label for="message">Treść wiadomości:</label><br>
		<textarea name="message" rows="5" cols="30" required></textarea><br>

		<input type="submit" value="Wyślij">
	</form>
</body>
</html>
