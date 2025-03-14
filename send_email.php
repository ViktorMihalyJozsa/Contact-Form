<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {  // Ha a formot POST metódussal küldték el  (A form action értéke üres)

  // Adatok ellenőrzése
  $name = htmlspecialchars($_POST['name']);  // Név mező tartalma
  $email = htmlspecialchars($_POST['email']);  // Email mező tartalma
  $message = htmlspecialchars($_POST['message']);  // Üzenet mező tartalma

  // Email cím és tárgy beállítása
  $to = "viktor.mihaly.jozsa@gmail.com";  // Címzett email
  $subject = "Kapcsolatfelvételi üzenet";  // Email tárgya

  // Email tartalom
  $body = "Név: $name\nEmail: $email\nÜzenet: $message";  // Email tartalma

  // Email fejlécek
  $headers = "From: $email\r\n";   // Feladó email címe
  $headers .= "Reply-To: $email\r\n";  // Válasz email címe
  $headers .= "Content-Type: text/plain; charset=UTF-8";  // Email tartalom típusa

  // Email küldése
  if (mail($to, $subject, $body, $headers)) {  // Email küldése
    echo "Az üzenet sikeresen elküldve!";  // Sikeres küldés esetén
  } else {
    echo "Hiba történt az üzenet küldésekor.";  // Sikertelen küldés esetén
  }
}
?>