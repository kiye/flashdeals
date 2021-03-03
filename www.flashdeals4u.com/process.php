<?php
// (A) PROCESS RESULT
$result = "";

// (B) CONNECT TO DATABASE
// CHANGE DATABASE SETTINGS TO YOUR OWN!
$dbhost = "localhost";
$dbname = "orders";
$dbchar = "utf8";
$dbuser = "root";
$dbpass = "";
try {
  $pdo = new PDO(
    "mysql:host=$dbhost;dbname=$dbname;charset=$dbchar",
    $dbuser, $dbpass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
  );
} catch (Exception $ex) { $result = $ex->getMessage(); }

// (C) SAVE ORDER TO DATABASE
if ($result=="") {
  try {
    $stmt = $pdo->prepare(
      "INSERT INTO `orders` (`names`, `mobile`, `address`, `pieces`, `email`) VALUES (?,?,?,?,?)"
    );
    $stmt->execute([
      $_POST['names'], $_POST['mobile'], $_POST['address'], $_POST['pieces'], $_POST['email']
    ]);
  } catch (Exception $ex) { $result = $ex->getMessage(); }
}

// (D) SEND ORDER VIA EMAIL
if ($result=="") {
  $to = "avadmediasolutions@gmail.com"; // CHANGE TO YOUR OWN!
  $subject = "ORDER RECEIVED";
  $message = "";
  foreach ($_POST as $k=>$v) { $message .= "$k - $v\r\n"; }
  if (!@mail($to, $subject, $message)) { $result = "Error sending mail!"; }
}